<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Country;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Scholarship;
use App\Models\ScholarshipCountry;
use App\Models\ScholarshipFieldStudy;
use App\Models\ScholarshipLevel;
use App\Models\ScholarshipWhoCanApply;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SystemConfiguration;
use App\Models\User;
use App\Models\UserPackage;
use App\Models\UserProfile;
use App\Utility\CategoryUtility;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchScholarshipController extends Controller
{
    public function index(Request $request)
    {
        if ($request->type == 'freelancer') {
            $type = 'freelancer';
            $keyword = $request->keyword;
            $rating = $request->rating;
            $category_id = (ProjectCategory::where('slug', $request->category_id)->first() != null) ? ProjectCategory::where('slug', $request->category_id)->first()->id : null;
            $category_ids = CategoryUtility::children_ids($category_id);
            $category_ids[] = $category_id;
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

            if ($category_id != null) {
                $freelancers = $freelancers->whereIn('specialist', $category_ids);
            }

            if ($country_id != null) {
                $user_ids = Address::where('country_id', $country_id)->pluck('addressable_id')->toArray();
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
            return view('frontend.default.freelancers-listing', compact('freelancers', 'total', 'keyword', 'type', 'rating', 'skill_ids', 'country_id', 'min_price', 'max_price'));
        } elseif ($request->type == 'service') {
            $type = 'service';
            $keyword = $request->keyword;
            $rating = $request->rating;

            $user_ids = UserPackage::where('package_invalid_at', '!=', null)
                ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                ->pluck('user_id');

            $services = Service::whereIn('user_id', $user_ids);

            if ($request->keyword != null) {
                $service_ids = Service::where('title', 'like', '%' . $keyword . '%')->pluck('id');
                $services = $services->whereIn('id', $service_ids);
            }

            $category_id = (ProjectCategory::where('slug', $request->category)->first() != null) ? ProjectCategory::where('slug', $request->category)->first()->id : null;

            $category_ids = CategoryUtility::children_ids($category_id);
            $category_ids[] = $category_id;
            if ($category_id != null) {
                $projects = $services->whereIn('project_cat_id', $category_ids);
            }

            $total = $services->count();
            $services = $services->paginate(9)->appends($request->query());
            return view('frontend.default.services-listing', compact('services', 'total', 'keyword', 'type', 'rating'));
        } elseif ($request->type == 'scholarships') {
            $type = 'scholarships';
            $keyword = $request->keyword;
            $rating = $request->rating;
            $level_id = array('');
            $fieldStudy_id = array('');
            $whoCanApply_id = array('');
            $country_id = array('');
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $skill_ids = $request->skill_ids ?? [];
            $freelancers = UserProfile::query();
            $scholarships = Scholarship::query();
            $category_names = [];
            $levels = [];
            $country_name = '';
            $countries = [];
            $fieldStudies = [];
            $whoCanApplies = [];
            $fieldStudy_ids = [];
            $whoCanApply_ids = [];
            $whoCanApply = ScholarshipWhoCanApply::all();
            // $scholarshipCountry=ScholarshipCountry::all();
            $scholarshipCountry = Country::all();


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

            if ($request->country_id != null) {
                $country_ids = $request->country_id;
                $countries = ScholarshipCountry::whereIn('id', $country_ids)->get();
                $country_id = $request->country_id;
                if ($country_ids[0] == "0") {
                    $allCountry = "0";
                    $scholarships = $scholarships->where('country_id', '!=', $allCountry);
                } else {
                    $scholarships = $scholarships->whereIn('country_id', $country_ids);
                }
            }
            if ($request->level_id != null) {
                $level_ids = $request->level_id;
                $levels = ScholarshipLevel::whereIn('id', $level_ids)->get();
                $level_id = $request->level_id;
                $scholarships = $scholarships->whereIn('level_id', $level_ids);
            }

            if ($request->fieldStudy_id != null) {
                $fieldStudy_ids = $request->fieldStudy_id;
                $fieldStudies = ScholarshipFieldStudy::whereIn('id', $fieldStudy_ids)->get();
                $scholarships = $scholarships->where(
                    function ($query) use ($fieldStudy_ids) {
                        foreach ($fieldStudy_ids as $field_id) {
                            $query->orWhere('fieldStudy_id', 'like', '%' . $field_id . '%');
                        }
                    }
                );
            }
            if ($request->whoCanApply_id != null) {
                $whoCanApply_ids = $request->whoCanApply_id;
                $whoCanApplies = ScholarshipWhoCanApply::whereIn('id', $whoCanApply_ids)->get();
                $whoCanApply_id = $request->whoCanApply_id;
                $scholarships = $scholarships->whereIn('whoCanApply_id', $whoCanApply_ids);
            }

            $ScholarshipTotal = $scholarships->count();
            $scholarships = $scholarships->paginate(10)->appends($request->query());

            return view('frontend.default.scholarships-listing', compact('keyword', 'type', 'rating', 'skill_ids', 'country_id', 'min_price', 'max_price', 'scholarships', 'level_id', 'country_id', 'fieldStudy_id', 'fieldStudy_ids', 'ScholarshipTotal', 'levels', 'country_name', 'countries', 'fieldStudies', 'whoCanApply_ids', 'whoCanApplies', 'whoCanApply', 'scholarshipCountry', 'countries'));
        } else {
            $type = 'project';
            $keyword = $request->keyword;
            $projectType = array('Fixed', 'Long Term');
            $bids = $request->bids;
            $sort = $request->sort;
            $category_id = (ProjectCategory::where('slug', $request->category)->first() != null) ? ProjectCategory::where('slug', $request->category)->first()->id : null;
            $category_ids = CategoryUtility::children_ids($category_id);
            $category_ids[] = $category_id;
            $min_price = $request->min_price;
            $max_price = $request->max_price;

            $project_approval = SystemConfiguration::where('type', 'project_approval')->first()->value;
            if ($project_approval == 1) {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval', 1);
            } else {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }

            if ($category_id != null) {
                $projects = $projects->whereIn('project_category_id', $category_ids);
            }
            $projects = $projects->where('name', 'like', '%' . $keyword . '%');

            if ($request->projectType != null) {
                $projectType = $request->projectType;
                $projects = $projects->whereIn('type', $projectType);
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
            return view('frontend.default.projects-listing', compact('projects', 'keyword', 'total', 'type', 'projectType', 'bids', 'sort', 'category_id', 'min_price', 'max_price'));
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
