<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Address;
use App\Models\ConsultantCategory;
use App\Models\Country;
use App\Models\Expertise;
use App\Models\Experts;
use App\Models\Language;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\Skill;
use App\Models\SystemConfiguration;
use App\Models\Training;
use App\Models\TrainingDate;
use App\Models\TrainingMode;
use App\Models\TrainingSoftware;
use App\Models\User;
use App\Models\UserPackage;
use App\Models\UserProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->type == 'expert') {
            $type = 'expert';
            $keyword = $request->keyword;
            $rating = $request->rating ?? [];
            $skillId = array('');
            $childSkillId = array('');
            $categoryId = array('');
            $rate1 = array('');
            $countryId = $request->country_id;
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;
            $skillIds = $request->skill_ids ?? [];
            $experts = UserProfile::query();
            $categories = [];
            $categoryIds = [];
            $skills = [];
            $skillIds = [];
            $rate = [];
            $hourlyRate = $request->hourly_rate ?? [];
            $consultantions = $request->consultantions;
            $availableInterview = $request->available_interview;
            $skills = Skill::with('childrens')->whereNull('parent_id')->get();
            $consultantCategory = ConsultantCategory::all();
            $expertises = Expertise::with('childrens')->whereNull('parent_id')->get();

            if ($request->keyword != null) {
                $userIds = User::where('user_type', 'expert')->where('name', 'like', '%' . $keyword . '%')->pluck('id');
                $userWithPkgIds = UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                    ->whereIn('user_id', $userIds)
                    ->pluck('user_id');

                $experts = $experts->whereIn('user_id', $userWithPkgIds);
            } else {
                $userIds = User::where('user_type', 'expert')->pluck('id');
                $userWithPkgIds = UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                    ->whereIn('user_id', $userIds)
                    ->pluck('user_id');
                $experts = $experts->whereIn('user_id', $userWithPkgIds);
            }
            if ($request->category_id != null) {
                $categoryIds = $request->category_id;
                $categories = ConsultantCategory::whereIn('id', $categoryIds)->get();
                $experts = $experts->whereIn('specialist', $categoryIds);
            }
            if ($countryId != null) {
                $userIds = Address::where('country_id', $countryId)->pluck('addressable_id')->toArray();
                $experts = $experts->whereIn('user_id', $userIds);
            }

            if ($request->skill_id != null) {
                $skillIds = $request->skill_id;
                $skills = Skill::whereIn('id', $skillIds)->get();
                $experts = $experts->where(function ($query) use ($skillIds) {
                    foreach ($skillIds as $skillId) {
                        $query->orWhere('skills', 'like', '%' . $skillId . '%');
                    }
                });
            }

            if ($request->childSkill_id != null) {
                $childSkillIds = $request->childSkill_id;
                $childSkills = Skill::whereIn('id', $childSkillIds)->get();
                $experts = $experts->where(function ($query) use ($childSkillIds) {
                    foreach ($childSkillIds as $childSkillId) {
                        $query->orWhere('skills', 'like', '%' . $childSkillId . '%');
                    }
                });
            }
            if ($request->hourly_rate != null) {
                if (in_array('all', $hourlyRate)) {
                    $userProfiles = UserProfile::pluck('user_id')->all();
                }
                if (in_array('10', $hourlyRate)) {
                    $minHourlyRate = 1;
                    $maxHourlyRate = 9;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('20', $hourlyRate)) {
                    $minHourlyRate = 10;
                    $maxHourlyRate = 20;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('30', $hourlyRate)) {
                    $minHourlyRate = 20;
                    $maxHourlyRate = 30;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('40', $hourlyRate)) {
                    $minHourlyRate = 30;
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('50', $hourlyRate)) {
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::where('hourly_rate', '>', $maxHourlyRate)->pluck('user_id')->toArray();
                }

                $experts = $experts->whereIn('user_id', $userProfiles);
            }

            if ($request->rating != null) {
                if ($rating == "5") {
                    $experts = $experts->where('rating', '>', 4);
                } else {
                    $experts = $experts->whereIn('rating', explode('-', $rating));
                }
            }

            $total = $experts->count();
            $experts = $experts->paginate(8)->appends($request->query());

            return view('frontend.expert.expert-listing', compact(
                'experts',
                'total',
                'keyword',
                'type',
                'rating',
                'skillIds',
                'countryId',
                'minPrice',
                'maxPrice',
                'categories',
                'categoryId',
                "categoryIds",
                'hourlyRate',
                'consultantions',
                'availableInterview',
                'skills',
                'consultantCategory',
                'expertises'
            ));
        } elseif ($request->type == 'training') {
            $type = 'training';
            $keyword = $request->keyword;
            $trainingIds = [];
            $trainingModeId = [];
            $trainingModes = [];
            $languageId = [];
            $categoryIds = [];
            $trainingCategory = [];
            $countryId = $request->country_id;
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;
            $skillIds = $request->skill_ids ?? [];
            $selectedTrainingModeId = [];
            $trainingModeIds = [];
            $languageIds = [];
            $languages = [];
            $trainingSoftwareIds = [];
            $trainingSoftware = [];
            $selectedTrainingLang = [];
            $selectedTrainingSoftware = [];
            $trainingDate = [];
            $trainings = Training::query();
            $trainings->join('training_dates', 'trainings.id', '=', 'training_dates.training_id');

            if ($request->training_date && $request->training_date != null) {
                $trainingDate = $request->training_date;
                $formattedDate = Carbon::createFromFormat('d-m-Y', $request->training_date)->format('Y-m-d');
                $trainings->whereDate('training_dates.training_date', '=', $formattedDate);
            }

            if ($request->keyword != null) {
                $trainings->where('title', 'like', '%' . $request->keyword . '%');
            }

            if ($request->category_id != null) {
                $categoryIds = $request->category_id;
                $trainingCategory = ProjectCategory::whereIn('id', $categoryIds)->get();
                $trainings = $trainings->whereIn('project_category_id', $categoryIds);
            }
            if ($request->training_mode_id != null) {
                $trainingModeIds = $request->training_mode_id;
                $trainingModes = TrainingMode::whereIn('id', $trainingModeIds)->get();
                $trainings = $trainings->whereIn('training_mode_id', $trainingModeIds);
            }

            if ($request->training_software_id != null) {
                $trainingSoftwareIds[] = $request->training_software_id;

                $trainingSoftware = TrainingSoftware::whereIn('id', $trainingSoftwareIds)->get();
                $trainings = $trainings->whereIn('training_software_id', $trainingSoftwareIds);
            }

            if ($request->language_id != null) {
                $languageIds = $request->language_id;
                $languages = Language::whereIn('id', $languageIds)->get();
                $trainings = $trainings->whereIn('language_id', $languageIds);
            }

            $trainingDates = TrainingDate::pluck('training_date')->toArray();
            $dateDay = [];
            $dateMonth = [];
            foreach ($trainingDates as $dateStr) {
                $timestamp = strtotime($dateStr);
                $month = date('m', $timestamp); // Month (01-12)
                $day = date('d', $timestamp);   // Day (01-31)
                $year = date('Y', $timestamp);  // Year (e.g., 2023)

                $dateMonth[] = $month;
                $dateDay[] = $day;
            }

            $dates = [];
            $months = [];

            foreach ($dateMonth as $month) {
                $monthInteger = intval($month);
                if ($monthInteger >= 1 && $monthInteger <= 12) {
                    $months[] = $monthInteger;
                }
            }

            foreach ($dateDay as $day) {
                $dayInteger = intval($day);
                if ($dayInteger >= 1 && $dayInteger <= 31) {
                    $dates[] = $dayInteger;
                }
            }

            $total = $trainings->count();
            $trainings = $trainings->paginate(8)->appends($request->query());

            return view('frontend.training.training-listing', compact(
                'trainings',
                'total',
                'keyword',
                'type',
                'languageId',
                'categoryIds',
                'trainingCategory',
                'trainingModeIds',
                'trainingModes',
                'selectedTrainingLang',
                'selectedTrainingSoftware',
                'trainingSoftware',
                'languageIds',
                'languages',
                'trainingSoftwareIds',
                'trainingDate',
                'trainingDates',
                'months',
                'dates'
            ));
        } elseif ($request->type == 'service') {
            $type = 'service';
            $keyword = $request->keyword;
            $rating = $request->rating;
            $deliveryTime = $request->delivery_time;
            $budget = $request->budget;
            $countryId = array('');
            $speaks = array('');
            $level = array('');
            $categoryId = array('');
            $userIds = UserPackage::where('package_invalid_at', '!=', null)
                ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                ->pluck('user_id');
            $services = Service::whereIn('user_id', $userIds);

            if ($request->keyword != null) {
                $serviceIds = Service::where('title', 'like', '%' . $keyword . '%')->pluck('id');
                $services = $services->whereIn('id', $serviceIds);
            }

            if ($request->delivery_time != null) {
                $deliveryTimes = 9;
                $serviceDeliveryTimeIds = ServicePackage::where('delivery_time', '<', $deliveryTimes)->pluck('service_id');
                $services = $services->whereIn('id', $serviceDeliveryTimeIds);
            }

            $total = $services->count();
            $services = $services->paginate(9)->appends($request->query());

            return view('frontend.service.services-listing', compact(
                'services',
                'total',
                'keyword',
                'type',
                'rating',
                'deliveryTime',
                'budget',
                'countryId',
                'speaks',
                'level',
                'categoryId'
            ));
        } elseif ($request->type == 'media-expert') {
            $type = 'media-expert';
            $keyword = $request->keyword;
            $rating = $request->rating ?? [];
            $skillId = array('');
            $childSkillId = array('');
            $categoryId = array('');
            $rate1 = array('');
            $countryId = $request->country_id;
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;
            $skillIds = $request->skill_ids ?? [];
            $experts = UserProfile::query();
            $categories = [];
            $categoryIds = [];
            $skills = [];
            $skillIds = [];
            $rate = [];
            $hourlyRate = $request->hourly_rate ?? [];
            $consultantions = $request->consultantions;
            $availableInterview = $request->available_interview;
            $expertises = Expertise::with('childrens')->whereNull('parent_id')->get();
            $skills = Skill::with('childrens')->whereNull('parent_id')->get();


            if ($request->keyword != null) {
                $userIds = User::where('user_type', 'expert')->where('name', 'like', '%' . $keyword . '%')->pluck('id');
                $userWithPkgIds = UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                    ->whereIn('user_id', $userIds)
                    ->pluck('user_id');

                $experts = $experts->whereIn('user_id', $userWithPkgIds);
            } else {
                $userIds = User::where('user_type', 'expert')->pluck('id');
                $userWithPkgIds = UserPackage::where('package_invalid_at', '!=', null)
                    ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                    ->whereIn('user_id', $userIds)
                    ->pluck('user_id');
                $experts = $experts->whereIn('user_id', $userWithPkgIds);
            }
            if ($request->category_id != null) {
                $categoryIds = $request->category_id;
                $categories = ConsultantCategory::whereIn('id', $categoryIds)->get();
                $experts = $experts->whereIn('specialist', $categoryIds);
            }
            if ($countryId != null) {
                $userIds = Address::where('country_id', $countryId)->pluck('addressable_id')->toArray();
                $experts = $experts->whereIn('user_id', $userIds);
            }

            if ($request->skill_id != null) {
                $skillIds = $request->skill_id;
                $skills = Skill::whereIn('id', $skillIds)->get();
                $experts = $experts->where(function ($query) use ($skillIds) {
                    foreach ($skillIds as $skillId) {
                        $query->orWhere('skills', 'like', '%' . $skillId . '%');
                    }
                });
            }

            if ($request->childSkill_id != null) {
                $childSkillIds = $request->childSkill_id;
                $childSkills = Skill::whereIn('id', $childSkillIds)->get();
                $experts = $experts->where(function ($query) use ($childSkillIds) {
                    foreach ($childSkillIds as $childSkillId) {
                        $query->orWhere('skills', 'like', '%' . $childSkillId . '%');
                    }
                });
            }
            if ($request->hourly_rate != null) {
                if (in_array('all', $hourlyRate)) {
                    $userProfiles = UserProfile::pluck('user_id')->all();
                }
                if (in_array('10', $hourlyRate)) {
                    $minHourlyRate = 1;
                    $maxHourlyRate = 9;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('20', $hourlyRate)) {
                    $minHourlyRate = 10;
                    $maxHourlyRate = 20;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('30', $hourlyRate)) {
                    $minHourlyRate = 20;
                    $maxHourlyRate = 30;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('40', $hourlyRate)) {
                    $minHourlyRate = 30;
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::whereBetween('hourly_rate', [$minHourlyRate, $maxHourlyRate])->pluck('user_id')->toArray();
                }

                if (in_array('50', $hourlyRate)) {
                    $maxHourlyRate = 40;
                    $userProfiles = UserProfile::where('hourly_rate', '>', $maxHourlyRate)->pluck('user_id')->toArray();
                }

                $experts = $experts->whereIn('user_id', $userProfiles);
            }

            if ($request->rating != null) {
                if ($rating == "5") {
                    $experts = $experts->where('rating', '>', 4);
                } else {
                    $experts = $experts->whereIn('rating', explode('-', $rating));
                }
            }

            $total = $experts->count();
            $experts = $experts->paginate(8)->appends($request->query());

            return view('frontend.expert.media-expert', compact(
                'experts',
                'total',
                'keyword',
                'type',
                'rating',
                'skillIds',
                'countryId',
                'minPrice',
                'maxPrice',
                'categories',
                'categoryId',
                'categoryIds',
                'hourlyRate',
                'consultantions',
                'availableInterview',
                'skills',
                'expertises'
            ));
        } else {
            $type = 'project';
            $keyword = $request->keyword;
            $projectType = $request->projectType ?? [];
            $bids = $request->bids;
            $sort = $request->sort;
            $skillId = array('');
            $childSkillId = array('');
            $fixedMin = $request->fixed_min;
            $fixedMax = $request->fixed_max;
            $hourlyMin = $request->hourly_min;
            $hourlyMax = $request->hourly_max;
            $selectedDurations = $request->input('durations') ?? [];
            $categoryId = array('');
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;
            $categories = [];
            $categoryIds = [];
            $categoryIds = [];
            $skills = [];
            $skillIds = [];
            $countryId = $request->country_id;
            $projectCategory = ProjectCategory::all();
            $skills = Skill::with('childrens')->whereNull('parent_id')->get();
            $allSkills = Skill::all();
            $countries = Country::all();

            $projectApproval = SystemConfiguration::where('type', 'project_approval')->first()->value;

            if ($projectApproval == 1) {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval', 1);
            } else {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }

            if ($request->category_id != null) {
                $categoryIds = $request->category_id;
                $categories = ProjectCategory::whereIn('id', $categoryIds)->get();
                $projects = $projects->whereIn('project_category_id', $categoryIds);
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
            if ($fixedMin !== null && $fixedMax !== null) {
                $projects = $projects->where(function ($query) use ($fixedMin, $fixedMax) {
                    $query->where('type', 'Fixed')->whereBetween('price', [$fixedMin, $fixedMax]);
                });
            }

            // Hourly filtered data
            if ($hourlyMin !== null && $hourlyMax !== null) {
                $projects = $projects->where('type', 'Hourly')
                    ->whereBetween('price', [$hourlyMin, $hourlyMax]);
            }

            if ($request->skill_id != null) {
                $skillIds = $request->skill_id;
                $skills = Skill::whereIn('id', $skillIds)->get();
                $projects = $projects->where(function ($query) use ($skillIds) {
                    foreach ($skillIds as $skillId) {
                        $query->orWhere('skills', 'like', '%' . $skillId . '%');
                    }
                });
            }
            if ($request->childSkill_id != null) {
                $childSkillIds = $request->childSkill_id;
                $childSkills = Skill::whereIn('id', $childSkillIds)->get();
                $projects = $projects->where(function ($query) use ($childSkillIds) {
                    foreach ($childSkillIds as $childSkillId) {
                        $query->orWhere('skills', 'like', '%' . $childSkillId . '%');
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

            if ($minPrice != null) {
                $projects = $projects->where('price', '>=', $minPrice);
            }

            if ($maxPrice != null) {
                $projects = $projects->where('price', '<=', $maxPrice);
            }

            if ($keyword != null) {
                $projectIds = Project::where('name', 'like', '%' . $keyword . '%')->pluck('id');
                $projects = $projects->whereIn('id', $projectIds);
            }
            if ($countryId != null) {
                $userIds = Address::where('country_id', $countryId)->pluck('addressable_id')->toArray();
                $projects = $projects->whereIn('client_user_id', $userIds);
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

            return view('frontend.project.projects-listing', compact(
                'projects',
                'keyword',
                'total',
                'type',
                'projectType',
                'bids',
                'sort',
                'categoryId',
                'minPrice',
                'maxPrice',
                'categories',
                'categoryIds',
                'skills',
                'skillIds',
                'fixedMin',
                'fixedMax',
                'hourlyMin',
                'hourlyMax',
                'selectedDurations',
                'projectCategory',
                'allSkills',
                'countries',
                'countryId'
            ));
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
            $projectApproval = SystemConfiguration::where('type', 'project_approval')->first()->value;
            if ($projectApproval == 1) {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval', 1);
            } else {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }

            $projects = $projects->where('skills', 'like', '%' . '"' . $id . '"' . '%')->latest();
            $total = count($projects->get());
            $projects = $projects->paginate(8)->appends($request->query());

            return view('frontend.project.projects-listing', compact('projects', 'keyword', 'total', 'type', 'projectType', 'bids', 'sort'));
        }
    }
}
