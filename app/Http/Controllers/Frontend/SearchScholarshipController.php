<?php

namespace App\Http\Controllers\Frontend;

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
        if ($request->type == 'expert') {
            $type = 'expert';
            $keyword = $request->keyword;
            $rating = $request->rating;
            $categoryId = (ProjectCategory::where('slug', $request->category_id)->first() != null) ? ProjectCategory::where('slug', $request->category_id)->first()->id : null;
            $categoryIds = CategoryUtility::children_ids($categoryId);
            $categoryIds[] = $categoryId;
            $countryId = $request->country_id;
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;
            $skillIds = $request->skill_ids ?? [];
            $experts = UserProfile::query();

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

            if ($categoryId != null) {
                $experts = $experts->whereIn('specialist', $categoryIds);
            }

            if ($countryId != null) {
                $userIds = Address::where('country_id', $countryId)->pluck('addressable_id')->toArray();
                $experts = $experts->whereIn('user_id', $userIds);
            }

            if ($minPrice != null) {
                $experts = $experts->where('hourly_rate', '>=', $minPrice);
            }

            if ($maxPrice != null) {
                $experts = $experts->where('hourly_rate', '<=', $maxPrice);
            }

            if ($request->rating != null) {
                if ($rating == "4+") {
                    $experts = $experts->where('rating', '>', 4);
                } else {
                    $experts = $experts->whereIn('rating', explode('-', $rating));
                }
            }

            if (count($skillIds) > 0) {
                $filteredExperts = [];
                foreach ($experts->get() as $key => $expert) {
                    $skillsOfThisExpert = json_decode($expert->skills);

                    if (!is_null($skillsOfThisExpert)) {
                        foreach ($skillsOfThisExpert as $key => $expertSlillId) {
                            if (in_array($expertSlillId, $skillIds)) {
                                array_push($filteredExperts, $expert);
                                break;
                            }
                        }
                    }
                }
                $total = count($filteredExperts);
                $experts = $filteredExperts;
            } else {
                $total = $experts->count();
                $experts = $experts->paginate(8)->appends($request->query());
            }

            return view('frontend.experts-listing', compact(
                'experts',
                'total',
                'keyword',
                'type',
                'rating',
                'skillIds',
                'countryId',
                'minPrice',
                'maxPrice'
            ));
        } elseif ($request->type == 'service') {
            $type = 'service';
            $keyword = $request->keyword;
            $rating = $request->rating;

            $userIds = UserPackage::where('package_invalid_at', '!=', null)
                ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                ->pluck('user_id');

            $services = Service::whereIn('user_id', $userIds);

            if ($request->keyword != null) {
                $serviceIds = Service::where('title', 'like', '%' . $keyword . '%')->pluck('id');
                $services = $services->whereIn('id', $serviceIds);
            }

            $categoryId = (ProjectCategory::where('slug', $request->category)->first() != null) ? ProjectCategory::where('slug', $request->category)->first()->id : null;

            $categoryIds = CategoryUtility::children_ids($categoryId);
            $categoryIds[] = $categoryId;
            if ($categoryId != null) {
                $projects = $services->whereIn('project_cat_id', $categoryIds);
            }

            $total = $services->count();
            $services = $services->paginate(9)->appends($request->query());

            return view('frontend.service.services-listing', compact('services', 'total', 'keyword', 'type', 'rating'));
        } elseif ($request->type == 'scholarships') {
            $type = 'scholarships';
            $keyword = $request->keyword;
            $rating = $request->rating;
            $levelId = array('');
            $fieldStudyId = array('');
            $whoCanApplyId = array('');
            $countryId = array('');
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;
            $skillIds = $request->skill_ids ?? [];
            $experts = UserProfile::query();
            $scholarships = Scholarship::query();
            $categoryNames = [];
            $levels = [];
            $countryName = '';
            $countries = [];
            $fieldStudies = [];
            $whoCanApplies = [];
            $fieldStudyIds = [];
            $whoCanApplyIds = [];
            $whoCanApply = ScholarshipWhoCanApply::all();
            $scholarshipCountry = Country::all();

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

            if ($request->country_id != null) {
                $countryIds = $request->country_id;
                $countries = ScholarshipCountry::whereIn('id', $countryIds)->get();
                $countryId = $request->country_id;
                if ($countryIds[0] == "0") {
                    $allCountry = "0";
                    $scholarships = $scholarships->where('country_id', '!=', $allCountry);
                } else {
                    $scholarships = $scholarships->whereIn('country_id', $countryIds);
                }
            }
            if ($request->level_id != null) {
                $levelIds = $request->level_id;
                $levels = ScholarshipLevel::whereIn('id', $levelIds)->get();
                $levelId = $request->level_id;
                $scholarships = $scholarships->whereIn('level_id', $levelIds);
            }

            if ($request->fieldStudy_id != null) {
                $fieldStudyIds = $request->fieldStudy_id;
                $fieldStudies = ScholarshipFieldStudy::whereIn('id', $fieldStudyIds)->get();
                $scholarships = $scholarships->where(
                    function ($query) use ($fieldStudyIds) {
                        foreach ($fieldStudyIds as $fieldId) {
                            $query->orWhere('fieldStudy_id', 'like', '%' . $fieldId . '%');
                        }
                    }
                );
            }
            if ($request->whoCanApply_id != null) {
                $whoCanApplyIds = $request->whoCanApply_id;
                $whoCanApplies = ScholarshipWhoCanApply::whereIn('id', $whoCanApplyIds)->get();
                $whoCanApplyId = $request->whoCanApply_id;
                $scholarships = $scholarships->whereIn('whoCanApply_id', $whoCanApplyIds);
            }

            $scholarshipTotal = $scholarships->count();
            $scholarships = $scholarships->paginate(10)->appends($request->query());

            return view('frontend.scholarship.scholarship-listing', compact(
                'keyword',
                'type', 'rating',
                'skillIds',
                'countryId',
                'minPrice',
                'maxPrice',
                'scholarships',
                'levelId',
                'countryId',
                'fieldStudyId',
                'fieldStudyIds',
                'scholarshipTotal',
                'levels',
                'countryName',
                'countries',
                'fieldStudies',
                'whoCanApplyIds',
                'whoCanApplies',
                'whoCanApply',
                'whoCanApplyId',
                'scholarshipCountry',
                'countries'
            ));
        } else {
            $type = 'project';
            $keyword = $request->keyword;
            $projectType = array('Fixed', 'Long Term');
            $bids = $request->bids;
            $sort = $request->sort;
            $categoryId = (ProjectCategory::where('slug', $request->category)->first() != null) ? ProjectCategory::where('slug', $request->category)->first()->id : null;
            $categoryIds = CategoryUtility::children_ids($categoryId);
            $categoryIds[] = $categoryId;
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;

            $projectApproval = SystemConfiguration::where('type', 'project_approval')->first()->value;
            if ($projectApproval == 1) {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval', 1);
            } else {
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }

            if ($categoryId != null) {
                $projects = $projects->whereIn('project_category_id', $categoryIds);
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

            if ($minPrice != null) {
                $projects = $projects->where('price', '>=', $minPrice);
            }

            if ($maxPrice != null) {
                $projects = $projects->where('price', '<=', $maxPrice);
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

            return view('frontend.project.projects-listing', compact(
                'projects',
                'keyword',
                'total',
                'type',
                'projectType',
                'bids', 'sort',
                'categoryId',
                'minPrice',
                'maxPrice'
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
