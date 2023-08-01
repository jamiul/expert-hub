<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use \App\Models\User;
use \App\Models\Skill;
use App\Models\Address;
use \App\Models\Project;
use \App\Models\Service;
use App\Models\ProjectUser;
use App\Models\UserPackage;
use Illuminate\Support\Arr;
use \App\Models\UserProfile;
use Illuminate\Http\Request;
use \App\Models\ProjectCategory;
use App\Models\ServicePackage;
use App\Utility\CategoryUtility;
use \App\Models\SystemConfiguration;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        if ($request->type == 'freelancer') {
            $type = 'freelancer';
            $keyword = $request->keyword;
            $rating = $request->rating ?? [];
            $skill_id = array('');
            $childSkill_id = array('');
            $category_id = array('');
            $country_id = $request->country_id;
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $skill_ids = $request->skill_ids ?? [];
            $freelancers = UserProfile::query();
            $categories = [];
            $category_ids=[];
            $skills = [];
            $skill_ids = [];
            $rate = [];
            $hourly_rate = $request->hourly_rate ?? [];


            if ($request->keyword != null) {
                $user_ids = User::where('user_type', 'freelancer')->where('name', 'like', '%' . $keyword . '%')->pluck('id');
                $user_with_pkg_ids = UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                    ->whereIn('user_id', $user_ids)
                    ->pluck('user_id');

                $freelancers = $freelancers->whereIn('user_id', $user_with_pkg_ids);
            } else {
                $user_ids = User::where('user_type', 'freelancer')->pluck('id');
                $user_with_pkg_ids = UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                    ->whereIn('user_id', $user_ids)
                    ->pluck('user_id');
                $freelancers = $freelancers->whereIn('user_id', $user_with_pkg_ids);
            }
            if ($request->category_id != null) {
                $category_ids = $request->category_id;
                $categories = ProjectCategory::whereIn('id', $category_ids)->get();
                $freelancers = $freelancers->whereIn('specialist', $category_ids);
            }
            if ($country_id != null) {
                $user_ids =  Address::where('country_id', $country_id)->pluck('addressable_id')->toArray();
                $freelancers = $freelancers->whereIn('user_id', $user_ids);
            }

            if ($request->skill_id != null) {
                $skill_ids = $request->skill_id;
                $skills = Skill::whereIn('id', $skill_ids)->get();
                $freelancers = $freelancers->where(function ($query) use ($skill_ids) {
                    foreach ($skill_ids as $skill_id) {
                        $query->orWhere('skills', 'like', '%' . $skill_id . '%');
                    }
                });
            }

            if ($request->childSkill_id != null) {
                $childSkill_ids = $request->childSkill_id;
                $childSkills = Skill::whereIn('id', $childSkill_ids)->get();
                $freelancers = $freelancers->where(function ($query) use ($childSkill_ids) {
                    foreach ($childSkill_ids as $childSkill_id) {
                        $query->orWhere('skills', 'like', '%' . $childSkill_id . '%');
                    }
                });
            }
            if($request->hourly_rate != null) {
                if (in_array('all', $hourly_rate)) {
                    $userProfiles = UserProfile::pluck('user_id')->all();
                }
                if(in_array('10', $hourly_rate)){
                    $minHourlyRate = 1;
                    $maxHourlyRate = 9;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if(in_array('20', $hourly_rate)){
                    $minHourlyRate = 10;
                    $maxHourlyRate = 20;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if(in_array('30', $hourly_rate)){
                    $minHourlyRate = 20;
                    $maxHourlyRate = 30;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if(in_array('40', $hourly_rate)){
                    $minHourlyRate = 30;
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if(in_array('50', $hourly_rate)){
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::where('hourly_rate', '>' ,$maxHourlyRate)->pluck('user_id')->toArray();
                }

                $freelancers = $freelancers->whereIn('user_id', $userProfiles);
            }

            if ($request->rating != null) {
                if ($rating == "5") {
                    $freelancers = $freelancers->where('rating', '>', 4);
                } else {
                    $freelancers = $freelancers->whereIn('rating', explode('-', $rating));
                }
            }

            $total = $freelancers->count();
            $freelancers = $freelancers->paginate(8)->appends($request->query());

            return view('frontend.default.freelancers-listing', compact('freelancers', 'total', 'keyword', 'type', 'rating',  'skill_ids', 'country_id', 'min_price', 'max_price', 'categories', 'category_id',"category_ids", 'hourly_rate'));
        } else if ($request->type == 'seminar') {
            $type = 'seminar';
            $keyword = $request->keyword;
            $rating = $request->rating;
            // $category_id = (ProjectCategory::where('slug', $request->category_id)->first() != null) ? ProjectCategory::where('slug', $request->category_id)->first()->id : null;
            // $category_ids = CategoryUtility::children_ids($category_id);
            // $category_ids[] = $category_id;
            $categories = [];
            $category_id = array('');
            $country_id = $request->country_id;
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $skill_ids = $request->skill_ids ?? [];
            $freelancers = UserProfile::query();

            if ($request->keyword != null) {
                $user_ids = User::where('user_type', 'freelancer')->where('name', 'like', '%' . $keyword . '%')->pluck('id');
                $user_with_pkg_ids = UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                    ->whereIn('user_id', $user_ids)
                    ->pluck('user_id');

                $freelancers = $freelancers->whereIn('user_id', $user_with_pkg_ids);
            } else {
                $user_ids = User::where('user_type', 'freelancer')->pluck('id');
                $user_with_pkg_ids = UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                    ->whereIn('user_id', $user_ids)
                    ->pluck('user_id');
                $freelancers = $freelancers->whereIn('user_id', $user_with_pkg_ids);
            }


            if ($request->category_id != null) {
                $category_ids = $request->category_id;
                $categories = ProjectCategory::whereIn('id', $category_ids)->get();
                $freelancers = $freelancers->where('category_id', $category_ids);
                // dd($freelancers);
            }
            if ($country_id != null) {
                $user_ids =  Address::where('country_id', $country_id)->pluck('addressable_id')->toArray();
                $freelancers = $freelancers->whereIn('user_id', $user_ids);
            }

            if ($min_price != null) {
                $freelancers = $freelancers->where('hourly_rate', '>=', $min_price);
            }

            if ($max_price != null) {
                $freelancers = $freelancers->where('hourly_rate', '<=', $max_price);
            }

            if ($request->rating != null) {
                if ($rating == "4+") {
                    $freelancers = $freelancers->where('rating', '>', 4);
                } else {
                    $freelancers = $freelancers->whereIn('rating', explode('-', $rating));
                }
            }

            if (count($skill_ids) > 0) {
                $filtered_freelancers = [];
                foreach ($freelancers->get() as $key => $freelancer) {

                    $skills_of_this_freelancer = json_decode($freelancer->skills);

                    if (!is_null($skills_of_this_freelancer)) {
                        foreach ($skills_of_this_freelancer as $key => $freelancer_slill_id) {
                            if (in_array($freelancer_slill_id, $skill_ids)) {
                                array_push($filtered_freelancers, $freelancer);
                                break;
                            }
                        }
                    }
                }
                $total = count($filtered_freelancers);
                $freelancers = $filtered_freelancers;
            } else {
                $total = $freelancers->count();
                $freelancers = $freelancers->paginate(8)->appends($request->query());
            }
            return view('frontend.default.seminar-listing', compact('freelancers', 'total', 'keyword', 'type', 'rating', 'skill_ids', 'country_id', 'min_price', 'max_price', 'categories', 'category_id'));
        } else if ($request->type == 'service') {

            $type = 'service';
            $keyword = $request->keyword;
            $rating = $request->rating;
            $delivery_time = $request->delivery_time;
            $budget = $request->budget;
            $country_id = array('');
            $speaks = array('');
            $level =  array('');
            $category_id = array('');
            // dd($keyword);
            $user_ids = UserPackage::where('package_invalid_at', '!=', null)
                ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                ->pluck('user_id');
            $services = Service::whereIn('user_id', $user_ids);

            if ($request->keyword != null) {
                $service_ids = Service::where('title', 'like', '%' . $keyword . '%')->pluck('id');
                $services = $services->whereIn('id', $service_ids);
            }
            if ($request->delivery_time != null) {
                // $service_delivery_time_ids = ServicePackage::where('delivery_time');
                // $services = $services->whereIn('id', $service_ids);
                $delivery_times =  9;
                // dd($delivery_time);
                $service_delivery_time_ids = ServicePackage::where('delivery_time', '<', $delivery_times)->pluck('service_id');
                // dd($service_delivery_time_ids);
                $services = $services->whereIn('id', $service_delivery_time_ids);
            }

            // $category_id = (ProjectCategory::where('slug', $request->category_id)->first() != null) ? ProjectCategory::where('slug', $request->category_id)->first()->id : null;

            // $category_ids = CategoryUtility::children_ids($category_id);
            // $category_ids[] = $category_id;
            // if ($category_id != null) {
            //     $projects = $services->whereIn('project_cat_id', $category_ids);
            // }

            $total = $services->count();
            $services = $services->paginate(9)->appends($request->query());
            return view('frontend.default.services-listing', compact('services', 'total', 'keyword', 'type', 'rating', 'delivery_time', 'budget', 'country_id', 'speaks', 'level', 'category_id'));
        } else {
            $type = 'project';
            $keyword = $request->keyword;
            $projectType = array('');
            $bids = $request->bids;
            $sort = $request->sort;
            $skill_id = array('');
            $childSkill_id = array('');

            $fixed_min = $request->fixed_min;
            $fixed_max = $request->fixed_max;
            $hourly_min = $request->hourly_min;
            $hourly_max = $request->hourly_max;
            // $durations = array('');
            // dd($durations);
            $selectedDurations = $request->input('durations');





            // $category_id = (ProjectCategory::where('slug', $request->category_id)->first() != null) ? ProjectCategory::where('slug', $request->category_id)->first()->id : null;
            // $category_ids = CategoryUtility::children_ids($category_id);
            // $category_ids[] = $category_id;
            $category_id = array('');
            // $category_ids=$category_id;
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $categories = [];
            $categoryIds = [];
            $category_ids = [];
            $skills = [];
            $skill_ids = [];



            $project_approval = SystemConfiguration::where('type', 'project_approval')->first()->value;
            if ($project_approval == 1) {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval', 1);
            } else {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }
            // dd($projects);

            // if ($category_id != null) {
            //     $projects = $projects->whereIn('project_category_id', $category_ids);
            // }
            // $categoriesProject = ProjectCategory::all();
            // dd($categoriesProject);


            // if ($request->projectType != null) {
            //     $category_ids = $request->category_id;
            //     $categories = ProjectCategory::whereIn('id', $category_ids)->get();
            //     // $categoryIds=$categories->pluck('id')
            //     $projects = $projects->whereIn('project_category_id', $category_ids);
            // }
            if ($request->category_id != null) {
                $category_ids = $request->category_id;
                $categories = ProjectCategory::whereIn('id', $category_ids)->get();
                // $categoryIds=$categories->pluck('id')
                $projects = $projects->whereIn('project_category_id', $category_ids);
            }
            // if ($request->durations != null) {
            //     // dd($durations);
            //     $projects = $projects->where(function ($query) use ($durations) {
            //         // dd($durations);
            //         foreach ($durations as $duration) {
            //             if ($duration === '1 week') {
            //                 $query->orWhereBetween('created_at', '=>', [now()->subWeek(), now()]);
            //             } elseif ($duration === '1 week - 4 week') {
            //                 $query->orWhereBetween('created_at', [now()->subWeeks(4), now()]);
            //             } elseif ($duration === '1 month - 3 month') {
            //                 $query->orWhereBetween('created_at', [now()->subMonths(1)->startOfMonth(), now()->subMonths(3)->endOfMonth()]);
            //             } elseif ($duration === '3 month - 6 month') {
            //                 $query->orWhereBetween('created_at', [now()->subMonths(6), now()]);
            //             } elseif ($duration === '6 month') {
            //                 $query->orWhere('created_at', '<=', now()->subMonths(6));
            //             }
            //         }
            //     });
            // }


            if (!empty($selectedDurations)) {
                $projects = $projects->where(function ($query) use ($selectedDurations) {
                    foreach ($selectedDurations as $duration) {
                        if ($duration === '1 week') {
                            $query->orWhereBetween('created_at', [now()->subWeek(), now()]);
                        } elseif ($duration === '1 week - 4 week') {
                            $query->orWhereBetween('created_at', [now()->subWeeks(4), now()]);
                        } elseif ($duration === '1 month - 3 month') {
                            $query->orWhereBetween('created_at', [now()->subMonths(3), now()]);
                        } elseif ($duration === '3 month - 6 month') {
                            $query->orWhereBetween('created_at', [now()->subMonths(6), now()]);
                        } elseif ($duration === '6 month') {
                            $query->orWhere('created_at', '<=', now()->subMonths(6));
                        }
                    }
                });
            }


                // update projects type
            if ($request->projectType != null) {
                $projectType = $request->projectType;
                $projects = $projects->whereIn('type', $projectType);
            }

            if ($fixed_min !== null && $fixed_max !== null) {
                $projects = $projects->where(function ($query) use ($fixed_min, $fixed_max) {
                    $query->where('type', 'Fixed')->whereBetween('price', [$fixed_min, $fixed_max]);
                });
            }

            if ($hourly_min !== null && $hourly_max !== null) {
                $projects = $projects->orWhere(function ($query) use ($hourly_min, $hourly_max) {
                    $query->where('type', 'Hourly')->whereBetween('price', [$hourly_min, $hourly_max]);
                });
            }

            if ($request->skill_id != null) {
                $skill_ids = $request->skill_id;
                $skills = Skill::whereIn('id', $skill_ids)->get();
                $projects = $projects->where(function ($query) use ($skill_ids) {
                    foreach ($skill_ids as $skill_id) {
                        $query->orWhere('skills', 'like', '%' . $skill_id . '%');
                    }
                });
            }
            if ($request->childSkill_id != null) {
                $childSkill_ids = $request->childSkill_id;
                $childSkills = Skill::whereIn('id', $childSkill_ids)->get();
                $projects = $projects->where(function ($query) use ($childSkill_ids) {
                    foreach ($childSkill_ids as $childSkill_id) {
                        $query->orWhere('skills', 'like', '%' . $childSkill_id . '%');
                    }
                });
            }

            if ($request->bids != null) {
                if ($bids == "30+") {
                    $projects = $projects->where('bids', '>', 30);
                } else {
                    $projects = $projects->whereIn('bids', explode('-', $bids));
                }
            }

            if ($min_price != null) {
                $projects = $projects->where('price', '>=', $min_price);
            }

            if ($max_price != null) {
                $projects = $projects->where('price', '<=', $max_price);
            }

            if ($keyword != null) {
                $project_ids = Project::where('name', 'like', '%' . $keyword . '%')->pluck('id');
                $projects = $projects->whereIn('id', $project_ids);
            }

            switch ($sort) {
                case '1':
                    $projects = $projects->orderBy('created_at', 'desc');
                    break;
                case '2':
                    $projects = $projects->orderBy('price', 'asc');
                    break;
                case '3':
                    $projects = $projects->orderBy('price', 'desc');
                    break;
                case '4':
                    $projects = $projects->orderBy('bids', 'asc');
                    break;
                case '5':
                    $projects = $projects->orderBy('bids', 'desc');
                    break;
                default:
                    $projects = $projects->latest();
                    break;
            }



            $total = $projects->count();
            $projects = $projects->paginate(8)->appends($request->query());
            return view('frontend.default.projects-listing', compact('projects', 'keyword', 'total', 'type', 'projectType', 'bids', 'sort', 'category_id', 'min_price', 'max_price', 'categories', 'categoryIds', 'category_ids', 'skills', 'skill_ids', 'fixed_min', 'fixed_max','hourly_min','hourly_max',));
        }
    }

    public function searchBySkill(Request $request, $id, $type)
    {
        $skill = Skill::findOrFail($id);

        $keyword = $request->keyword;
        $projectType = array('Fixed', 'Long Term');
        $bids = $request->bids;
        $sort = $request->sort;

        if ($type == 'projects') {
            $project_approval = SystemConfiguration::where('type', 'project_approval')->first()->value;
            if ($project_approval == 1) {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval', 1);
            } else {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }

            $projects = $projects->where('skills', 'like', '%' . '"' . $id . '"' . '%')->latest();
            $total = count($projects->get());
            $projects = $projects->paginate(8)->appends($request->query());
            return view('frontend.default.projects-listing', compact('projects', 'keyword', 'total', 'type', 'projectType', 'bids', 'sort'));
 }
}
}
