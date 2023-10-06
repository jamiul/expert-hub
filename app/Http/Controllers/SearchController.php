<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\ConsultantCategory;
use App\Models\Country;
use App\Models\Expertise;
use App\Models\Experts;
use App\Models\Language;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Seminar;
use App\Models\SeminarDate;
use App\Models\SeminarMode;
use App\Models\SeminarSoftware;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\Skill;
use App\Models\SystemConfiguration;
use App\Models\User;
use App\Models\UserPackage;
use App\Models\UserProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->type == 'freelancer') {
            $type = 'freelancer';
            $keyword = $request->keyword;
            $rating = $request->rating ?? [];
            $skill_id = array('');
            $childSkill_id = array('');
            $category_id = array('');
            $rate1 = array('');
            $country_id = $request->country_id;
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $skill_ids = $request->skill_ids ?? [];
            $freelancers = UserProfile::query();
            $categories = [];
            $category_ids = [];
            $skills = [];
            $skill_ids = [];
            $rate = [];
            $hourly_rate = $request->hourly_rate ?? [];
            $consultantions = $request->consultantions;
            $available_interview = $request->available_interview;
            $skills = Skill::with('childrens')->whereNull('parent_id')->get();
            $consultantCategory = ConsultantCategory::all();
            $expertises = Expertise::with('childrens')->whereNull('parent_id')->get();

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
                $categories = ConsultantCategory::whereIn('id', $category_ids)->get();
                $freelancers = $freelancers->whereIn('specialist', $category_ids);
            }
            if ($country_id != null) {
                $user_ids = Address::where('country_id', $country_id)->pluck('addressable_id')->toArray();
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
            if ($request->hourly_rate != null) {
                if (in_array('all', $hourly_rate)) {
                    $userProfiles = UserProfile::pluck('user_id')->all();
                }
                if (in_array('10', $hourly_rate)) {
                    $minHourlyRate = 1;
                    $maxHourlyRate = 9;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('20', $hourly_rate)) {
                    $minHourlyRate = 10;
                    $maxHourlyRate = 20;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('30', $hourly_rate)) {
                    $minHourlyRate = 20;
                    $maxHourlyRate = 30;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('40', $hourly_rate)) {
                    $minHourlyRate = 30;
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('50', $hourly_rate)) {
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::where('hourly_rate', '>', $maxHourlyRate)->pluck('user_id')->toArray();
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

            return view('frontend.default.freelancers-listing', compact(
                'freelancers',
                'total',
                'keyword',
                'type',
                'rating',
                'skill_ids',
                'country_id',
                'min_price',
                'max_price',
                'categories',
                'category_id',
                "category_ids",
                'hourly_rate',
                'consultantions',
                'available_interview',
                'skills',
                'consultantCategory',
                'expertises'
            ));
        } elseif ($request->type == 'seminar') {
            $type = 'seminar';
            $keyword = $request->keyword;
            $seminar_ids = [];
            $seminarMode_id = [];
            $seminar_modes = [];
            $language_id = [];
            $category_ids = [];
            $seminar_category = [];
            $country_id = $request->country_id;
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $skill_ids = $request->skill_ids ?? [];
            $selected_seminar_mode_id = [];
            $seminar_mode_ids = [];
            $language_ids = [];
            $languages = [];
            $seminar_software_ids = [];
            $seminarSoftware = [];
            $selected_seminar_lang = [];
            $selected_seminar_software = [];
            $seminarDate = [];
            $seminars = Seminar::query();
            $seminars->join('seminar_dates', 'seminars.id', '=', 'seminar_dates.seminar_id');

            if ($request->seminar_date && $request->seminar_date != null) {
                $seminarDate = $request->seminar_date;
                $formattedDate = Carbon::createFromFormat('d-m-Y', $request->seminar_date)->format('Y-m-d');
                $seminars->whereDate('seminar_dates.seminar_date', '=', $formattedDate);
            }

            if ($request->keyword != null) {
                $seminars->where('title', 'like', '%' . $request->keyword . '%');
            }

            if ($request->category_id != null) {
                $category_ids = $request->category_id;
                $seminar_category = ProjectCategory::whereIn('id', $category_ids)->get();
                $seminars = $seminars->whereIn('project_category_id', $category_ids);
            }
            if ($request->seminar_mode_id != null) {
                $seminar_mode_ids = $request->seminar_mode_id;
                $seminar_modes = SeminarMode::whereIn('id', $seminar_mode_ids)->get();
                $seminars = $seminars->whereIn('seminar_mode_id', $seminar_mode_ids);
            }

            if ($request->seminar_software_id != null) {
                $seminar_software_ids[] = $request->seminar_software_id;

                $seminarSoftware = SeminarSoftware::whereIn('id', $seminar_software_ids)->get();
                $seminars = $seminars->whereIn('seminar_software_id', $seminar_software_ids);
            }

            if ($request->language_id != null) {
                $language_ids = $request->language_id;
                $languages = Language::whereIn('id', $language_ids)->get();
                $seminars = $seminars->whereIn('language_id', $language_ids);
            }

            $seminar_dates = SeminarDate::pluck('seminar_date')->toArray();
            $date_day = [];
            $date_month = [];
            foreach ($seminar_dates as $dateStr) {
                $timestamp = strtotime($dateStr);
                $month = date('m', $timestamp); // Month (01-12)
                $day = date('d', $timestamp);   // Day (01-31)
                $year = date('Y', $timestamp);  // Year (e.g., 2023)

                $date_month[] = $month;
                $date_day[] = $day;
            }

            $dates = [];
            $months = [];

            foreach ($date_month as $month) {
                $monthInteger = intval($month);
                if ($monthInteger >= 1 && $monthInteger <= 12) {
                    $months[] = $monthInteger;
                }
            }

            foreach ($date_day as $day) {
                $dayInteger = intval($day);
                if ($dayInteger >= 1 && $dayInteger <= 31) {
                    $dates[] = $dayInteger;
                }
            }

            $total = $seminars->count();
            $seminars = $seminars->paginate(8)->appends($request->query());

            return view('frontend.default.seminar-listing', compact(
                'seminars',
                'total',
                'keyword',
                'type',
                'language_id',
                'category_ids',
                'seminar_category',
                'seminar_mode_ids',
                'seminar_modes',
                'selected_seminar_lang',
                'selected_seminar_software',
                'seminarSoftware',
                'language_ids',
                'languages',
                'seminar_software_ids',
                'seminarDate',
                'seminar_dates',
                'months',
                'dates'
            ));
        } elseif ($request->type == 'service') {
            $type = 'service';
            $keyword = $request->keyword;
            $rating = $request->rating;
            $delivery_time = $request->delivery_time;
            $budget = $request->budget;
            $country_id = array('');
            $speaks = array('');
            $level = array('');
            $category_id = array('');
            $user_ids = UserPackage::where('package_invalid_at', '!=', null)
                ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                ->pluck('user_id');
            $services = Service::whereIn('user_id', $user_ids);

            if ($request->keyword != null) {
                $service_ids = Service::where('title', 'like', '%' . $keyword . '%')->pluck('id');
                $services = $services->whereIn('id', $service_ids);
            }
            if ($request->delivery_time != null) {
                $delivery_times = 9;
                $service_delivery_time_ids = ServicePackage::where('delivery_time', '<', $delivery_times)->pluck('service_id');
                $services = $services->whereIn('id', $service_delivery_time_ids);
            }


            $total = $services->count();
            $services = $services->paginate(9)->appends($request->query());
            return view('frontend.default.services-listing', compact('services', 'total', 'keyword', 'type', 'rating', 'delivery_time', 'budget', 'country_id', 'speaks', 'level', 'category_id'));
        } elseif ($request->type == 'media-expert') {
            $type = 'media-expert';
            $keyword = $request->keyword;
            $rating = $request->rating ?? [];
            $skill_id = array('');
            $childSkill_id = array('');
            $category_id = array('');
            $rate1 = array('');
            $country_id = $request->country_id;
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $skill_ids = $request->skill_ids ?? [];
            $freelancers = UserProfile::query();
            $categories = [];
            $category_ids = [];
            $skills = [];
            $skill_ids = [];
            $rate = [];
            $hourly_rate = $request->hourly_rate ?? [];
            $consultantions = $request->consultantions;
            $available_interview = $request->available_interview;
            $expertises = Expertise::with('childrens')->whereNull('parent_id')->get();
            $skills = Skill::with('childrens')->whereNull('parent_id')->get();


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
                $categories = ConsultantCategory::whereIn('id', $category_ids)->get();
                $freelancers = $freelancers->whereIn('specialist', $category_ids);
            }
            if ($country_id != null) {
                $user_ids = Address::where('country_id', $country_id)->pluck('addressable_id')->toArray();
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
            if ($request->hourly_rate != null) {
                if (in_array('all', $hourly_rate)) {
                    $userProfiles = UserProfile::pluck('user_id')->all();
                }
                if (in_array('10', $hourly_rate)) {
                    $minHourlyRate = 1;
                    $maxHourlyRate = 9;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('20', $hourly_rate)) {
                    $minHourlyRate = 10;
                    $maxHourlyRate = 20;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('30', $hourly_rate)) {
                    $minHourlyRate = 20;
                    $maxHourlyRate = 30;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('40', $hourly_rate)) {
                    $minHourlyRate = 30;
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('50', $hourly_rate)) {
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::where('hourly_rate', '>', $maxHourlyRate)->pluck('user_id')->toArray();
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

            return view('frontend.default.media-expert', compact('freelancers', 'total', 'keyword', 'type', 'rating', 'skill_ids', 'country_id', 'min_price', 'max_price', 'categories', 'category_id', "category_ids", 'hourly_rate', 'consultantions', 'available_interview', 'skills', 'expertises'));
        } else {
            $type = 'project';
            $keyword = $request->keyword;
            $projectType = $request->projectType ?? [];
            $bids = $request->bids;
            $sort = $request->sort;
            $skill_id = array('');
            $childSkill_id = array('');
            $fixed_min = $request->fixed_min;
            $fixed_max = $request->fixed_max;
            $hourly_min = $request->hourly_min;
            $hourly_max = $request->hourly_max;
            $selectedDurations = $request->input('durations') ?? [];
            $category_id = array('');
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $categories = [];
            $categoryIds = [];
            $category_ids = [];
            $skills = [];
            $skill_ids = [];
            $country_id = $request->country_id;
            $projectCategory = ProjectCategory::all();
            $skills = Skill::with('childrens')->whereNull('parent_id')->get();
            $all_skills = Skill::all();
            $countries = Country::all();


            $project_approval = SystemConfiguration::where('type', 'project_approval')->first()->value;
            if ($project_approval == 1) {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval', 1);
            } else {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }


            if ($request->category_id != null) {
                $category_ids = $request->category_id;
                $categories = ProjectCategory::whereIn('id', $category_ids)->get();
                $projects = $projects->whereIn('project_category_id', $category_ids);
            }

            if (!empty($selectedDurations)) {
                $projects = $projects->where(function ($query) use ($selectedDurations) {
                    foreach ($selectedDurations as $duration) {
                        if ($duration === '1 week') {
                            $query->orWhereBetween('created_at', [now()->subWeek(), now()]);
                        } elseif ($duration === '1 week - 4 week') {
                            $query->orWhereBetween('created_at', [now()->subWeeks(4), now()->subWeek()]);
                        } elseif ($duration === '1 month - 3 month') {
                            $query->orWhereBetween('created_at', [now()->subMonths(3), now()->subWeeks(4)]);
                        } elseif ($duration === '3 month - 6 month') {
                            $query->orWhereBetween('created_at', [now()->subMonths(6), now()->subMonths(3)]);
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

            // Fixed price filtered data
            if ($fixed_min !== null && $fixed_max !== null) {
                $projects = $projects->where(function ($query) use ($fixed_min, $fixed_max) {
                    $query->where('type', 'Fixed')->whereBetween('price', [$fixed_min, $fixed_max]);
                });
            }

            // Hourly filtered data
            if ($hourly_min !== null && $hourly_max !== null) {
                $projects = $projects->where('type', 'Hourly')
                    ->whereBetween('price', [$hourly_min, $hourly_max]);
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
            if ($country_id != null) {
                $user_ids = Address::where('country_id', $country_id)->pluck('addressable_id')->toArray();
                $projects = $projects->whereIn('client_user_id', $user_ids);
            }
            switch ($sort) {
                case '1':
                    $projects = $projects->orderBy('hourly_rate', 'desc');
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
            return view('frontend.default.projects-listing', compact('projects', 'keyword', 'total', 'type', 'projectType', 'bids', 'sort', 'category_id', 'min_price', 'max_price', 'categories', 'categoryIds', 'category_ids', 'skills', 'skill_ids', 'fixed_min', 'fixed_max', 'hourly_min', 'hourly_max', 'selectedDurations', 'projectCategory', 'all_skills', 'countries', 'country_id'));
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
