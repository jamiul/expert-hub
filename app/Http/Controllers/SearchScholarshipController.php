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
use App\Models\Scholarship;
use App\Models\ScholarshipCountry;
use App\Utility\CategoryUtility;
use \App\Models\SystemConfiguration;

class SearchScholarshipController extends Controller
{
    public function index(Request $request){
        if($request->type == 'freelancer'){
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


            if($request->keyword != null){
                $user_ids = User::where('user_type', 'freelancer')->where('name', 'like', '%'.$keyword.'%')->pluck('id');
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

            if($category_id != null){
                $freelancers = $freelancers->whereIn('specialist', $category_ids);
            }

            if($country_id != null){
                $user_ids =  Address::where('country_id', $country_id)->pluck('addressable_id')->toArray();
                $freelancers = $freelancers->whereIn('user_id', $user_ids);

            }

            if($min_price != null){
                $freelancers = $freelancers->where('hourly_rate', '>=', $min_price);

            }

            if($max_price != null){
                $freelancers = $freelancers->where('hourly_rate', '<=', $max_price);
            }

            if($request->rating != null){
                if ($rating == "4+") {
                    $freelancers = $freelancers->where('rating', '>', 4);
                }
                else {
                    $freelancers = $freelancers->whereIn('rating', explode('-', $rating));
                }
            }

            if(count($skill_ids) > 0){
                $filtered_freelancers = [];
                foreach ($freelancers->get() as $key => $freelancer) {

                    $skills_of_this_freelancer = json_decode($freelancer->skills);

                    if(!is_null($skills_of_this_freelancer)){
                        foreach ($skills_of_this_freelancer as $key => $freelancer_slill_id) {
                        if(in_array($freelancer_slill_id, $skill_ids)){
                            array_push($filtered_freelancers,$freelancer);
                            break;
                        }
                    }
                    }
                }
                $total = count($filtered_freelancers);
                $freelancers = $filtered_freelancers;
            }else{
                $total = $freelancers->count();
                $freelancers = $freelancers->paginate(8)->appends($request->query());
            }
            return view('frontend.default.freelancers-listing', compact('freelancers', 'total', 'keyword', 'type', 'rating', 'skill_ids', 'country_id', 'min_price', 'max_price'));
        }
        else if($request->type == 'service'){
            $type = 'service';
            $keyword = $request->keyword;
            $rating = $request->rating;

            $user_ids = UserPackage::where('package_invalid_at', '!=', null)
                        ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                        ->pluck('user_id');

            $services = Service::whereIn('user_id', $user_ids);

            if($request->keyword != null){
                $service_ids = Service::where('title', 'like', '%'.$keyword.'%')->pluck('id');
                $services = $services->whereIn('id', $service_ids);
            }

            $category_id = (ProjectCategory::where('slug', $request->category)->first() != null) ? ProjectCategory::where('slug', $request->category)->first()->id : null;

            $category_ids = CategoryUtility::children_ids($category_id);
            $category_ids[] = $category_id;
            if($category_id != null){
                $projects = $services->whereIn('project_cat_id', $category_ids);
            }

            $total = $services->count();
            $services = $services->paginate(9)->appends($request->query());
            return view('frontend.default.services-listing', compact('services', 'total', 'keyword', 'type', 'rating'));
        }
         else if($request->type == 'scholarships'){
            // dd($request);
            $type = 'scholarships';
            $keyword = $request->keyword;
            $rating = $request->rating;
            $category_id = $request->category_id;
            $level_id = $request->level_id;
            $fieldStudy_id = $request->fieldStudy_id;
            $country_id = $request->country_id;
            $category_id = (ProjectCategory::where('slug', $request->category_id)->first() != null) ? ProjectCategory::where('slug', $request->category_id)->first()->id : null;
            $category_ids = CategoryUtility::children_ids($category_id);
            $category_ids[] = $category_id;

            $min_price = $request->min_price;
            $max_price = $request->max_price;
            $skill_ids = $request->skill_ids ?? [];
            $freelancers = UserProfile::query();
            $scholarships=Scholarship::query();

            if($request->keyword != null){
                $user_ids = User::where('user_type', 'freelancer')->where('name', 'like', '%'.$keyword.'%')->pluck('id');
                $user_with_pkg_ids = UserPackage::where('package_invalid_at', '!=', null)
                        ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                        ->whereIn('user_id', $user_ids)
                        ->pluck('user_id');

                $freelancers = $freelancers->whereIn('user_id', $user_with_pkg_ids);
            }
            else {
                $user_ids = User::where('user_type', 'freelancer')->pluck('id');
                $user_with_pkg_ids = UserPackage::where('package_invalid_at', '!=', null)
                        ->where('package_invalid_at', '>', Carbon::now()->format('Y-m-d'))
                        ->whereIn('user_id', $user_ids)
                        ->pluck('user_id');
                $freelancers = $freelancers->whereIn('user_id', $user_with_pkg_ids);
            }

            // if($category_id != null){
            //     $freelancers = $freelancers->whereIn('specialist', $category_ids);
            // }

            if($country_id != null){
                // $user_ids =  ScholarshipCountry::where('id', $country_id);
                $scholarships = $scholarships->where('country_id', $country_id);
            }
            if($level_id != null){
                // $user_ids =  ScholarshipCountry::where('id', $country_id);
                $scholarships = $scholarships->where('level_id', $level_id);
            }
            if($fieldStudy_id != null){
                // $user_ids =  ScholarshipCountry::where('id', $country_id);
                $scholarships = $scholarships->where('fieldStudy_id', $fieldStudy_id);
            }
            if($level_id != null){
                // $user_ids =  ScholarshipCountry::where('id', $country_id);
                $scholarships = $scholarships->where('level_id', $level_id);
            }

            if($min_price != null){
                $freelancers = $freelancers->where('hourly_rate', '>=', $min_price);
            }
            if($max_price != null){
                $freelancers = $freelancers->where('hourly_rate', '<=', $max_price);
            }

            if($request->rating != null){
                if ($rating == "4+") {
                    $freelancers = $freelancers->where('rating', '>', 4);
                }
                else {
                    $freelancers = $freelancers->whereIn('rating', explode('-', $rating));
                }
            }
            if($request->country_id != null){
                $scholarships= $scholarships->where('country_id',$country_id);
            }
            // dd($scholarships);

            if(count($skill_ids) > 0){
                $filtered_freelancers = [];
                foreach ($freelancers->get() as $key => $freelancer) {

                    $skills_of_this_freelancer = json_decode($freelancer->skills);

                    if(!is_null($skills_of_this_freelancer)){
                        foreach ($skills_of_this_freelancer as $key => $freelancer_slill_id) {
                        if(in_array($freelancer_slill_id, $skill_ids)){
                            array_push($filtered_freelancers,$freelancer);
                            break;
                        }
                    }
                    }
                }
                $total = count($filtered_freelancers);
                $freelancers = $filtered_freelancers;

            }else{
                $total = $freelancers->count();
                $freelancers = $freelancers->paginate(8)->appends($request->query());
                $ScholarshipTotal = $scholarships->count();
                $scholarships = $scholarships->paginate(8)->appends($request->query());
            }
            return view('frontend.default.scholarships-listing', compact('freelancers', 'total', 'keyword', 'type', 'rating', 'skill_ids', 'country_id', 'min_price', 'max_price','scholarships','category_id','level_id','country_id','fieldStudy_id','ScholarshipTotal',));
        }
        else {
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

            $project_approval = SystemConfiguration::where('type','project_approval')->first()->value;
            if($project_approval == 1){
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval',1);
            }else{
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }

            if($category_id != null){
                $projects = $projects->whereIn('project_category_id', $category_ids);
            }
            $projects = $projects->where('name', 'like', '%'.$keyword.'%');

            if($request->projectType != null){
                $projectType = $request->projectType;
                $projects = $projects->whereIn('type', $projectType);
            }

            if($request->bids != null){
                if ($bids == "30+") {
                    $projects = $projects->where('bids', '>', 30);
                }
                else {
                    $projects = $projects->whereIn('bids', explode('-', $bids));
                }
            }

            if($min_price != null){
                $projects = $projects->where('price', '>=', $min_price);

            }

            if($max_price != null){
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

    public function searchBySkill(Request $request, $id, $type){
        $skill = Skill::findOrFail($id);

        $keyword = $request->keyword;
        $projectType = array('Fixed', 'Long Term');
        $bids = $request->bids;
        $sort = $request->sort;

        if($type == 'projects'){
            $project_approval = SystemConfiguration::where('type','project_approval')->first()->value;
            if($project_approval == 1){
                $projects = Project::biddable()->notcancel()->open()->where('private', '0')->where('project_approval',1);
            }else{
                $projects = Project::biddable()->notcancel()->open()->where('private', '0');
            }

            $projects = $projects->where('skills', 'like', '%'.'"'.$id.'"'.'%')->latest();
            $total = count($projects->get());
            $projects = $projects->paginate(8)->appends($request->query());
            return view('frontend.default.projects-listing', compact('projects', 'keyword', 'total', 'type', 'projectType', 'bids', 'sort'));
        }
    }
}
