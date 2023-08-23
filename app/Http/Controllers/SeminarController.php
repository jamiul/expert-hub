<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\ScholarshipCategory;
use App\Models\Scholarship;
use App\Models\ScholarshipCity;
use App\Models\ScholarshipCountry;
use App\Models\ScholarshipFieldStudy;
use App\Models\ScholarshipLevel;
use App\Models\ScholarshipQualification;
use App\Models\ScholarshipUniversity;
use App\Models\ScholarshipWhoCanApply;
use App\Models\Seminar;
use App\Models\SeminarMode;
use App\Models\SeminarSoftware;

class SeminarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show all blogs'])->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $seminars = Seminar::orderBy('created_at', 'desc');


        if ($request->search != null){
            $seminars = $seminars->where('title', 'like', '%'.$request->search.'%');
            $sort_search = $request->search;
        }

        $seminar = $seminars->paginate(15);
        // dd($seminar);

        return view('admin.default.seminar_module.seminar.index', compact('seminars','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(getUserRoles());
        $seminar_modes = SeminarMode::all();
        $seminar_softwares = SeminarSoftware::all();
        $languages = Language::all();
        $course_instructors = getConsultants();

        return view('admin.default.seminar_module.seminar.create', compact('seminar_modes','seminar_softwares','languages','course_instructors'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(getUserRoles());
        $scholarship = new Scholarship;

        $scholarship->category_id = $request->category_id;
        $scholarship->level_id = $request->level_id;
        $scholarship->university_id = $request->university_id;
        $scholarship->website_link = $request->website_link;
        $scholarship->country_id = $request->country_id;
        $scholarship->city_id = $request->city_id;
        $scholarship->whoCanApply_id = $request->whoCanApply_id;
        $scholarship->qualification_id = $request->qualification_id;
        $scholarship->fieldStudy_id = json_encode($request->fieldStudy_id);
        $scholarship->title = $request->title;
        $scholarship->short_description = $request->short_description;
        $scholarship->banner = $request->banner;
        $scholarship->meta_title = $request->meta_title;
        $scholarship->description = $request->description;
        $scholarship->meta_img = $request->meta_img;
        $scholarship->meta_description = $request->meta_description;
        $scholarship->meta_keywords = $request->meta_keywords;
        $scholarship->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));

        $scholarship->save();

        flash(translate('Scholarship post has been created successfully'))->success();
        return redirect()->route('scholarship.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scholarship = Scholarship::find($id);
        $scholarship_categories = ScholarshipCategory::all();
        $scholarship_levels = ScholarshipLevel::all();
        $scholarship_universities = ScholarshipUniversity::all();
        $scholarship_country = ScholarshipCountry::all();
        $scholarship_city = ScholarshipCity::all();
        $scholarship_qualification = ScholarshipQualification::all();
        $scholarship_whoCanApply = ScholarshipWhoCanApply::all();
        $scholarship_fieldStudy = ScholarshipFieldStudy::all();

        return view('admin.default.scholarship_module.scholarship.edit', compact('scholarship','scholarship_categories','scholarship_levels','scholarship_universities','scholarship_country','scholarship_city','scholarship_qualification','scholarship_whoCanApply','scholarship_fieldStudy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);

        $scholarship = Scholarship::find($id);

        $scholarship->category_id = $request->category_id;
        $scholarship->level_id = $request->level_id;
        $scholarship->university_id = $request->university_id;
        $scholarship->website_link = $request->website_link;
        $scholarship->country_id = $request->country_id;
        $scholarship->city_id = $request->city_id;
        $scholarship->whoCanApply_id = $request->whoCanApply_id;
        $scholarship->qualification_id = $request->qualification_id;
        $scholarship->fieldStudy_id =json_encode($request->fieldStudy_id);
        $scholarship->title = $request->title;
        $scholarship->banner = $request->banner;
        $scholarship->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $scholarship->short_description = $request->short_description;
        $scholarship->description = $request->description;

        $scholarship->meta_title = $request->meta_title;
        $scholarship->meta_img = $request->meta_img;
        $scholarship->meta_description = $request->meta_description;
        $scholarship->meta_keywords = $request->meta_keywords;
        // dd($scholarship->fieldStudy_id);
        $scholarship->save();

        flash(translate( 'Scholarship post has been updated successfully'))->success();
        return redirect()->route('scholarship.index');
    }

    public function change_status(Request $request) {
        $scholarship = Scholarship::find($request->id);
        $scholarship->status = $request->status;

        $scholarship->save();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Scholarship::find($id)->delete();

        return redirect('admin/scholarship');
    }


    public function all_scholarship() {
        $scholarships = Scholarship::where('status', 1)->orderBy('created_at', 'asc')->paginate(12);
        dd($scholarships);
        return view("frontend.default.find-scholarship.listing", compact('scholarships'));
    }

    public function scholarship_details($slug) {
        $scholarship = Scholarship::where('slug', $slug)->first();
        return view("frontend.default.find-scholarship.details", compact('scholarship'));
}
}