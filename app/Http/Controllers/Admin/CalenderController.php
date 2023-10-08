<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\Calender;
use App\Models\Scholarship;
use App\Models\ScholarshipCategory;
use App\Models\ScholarshipCity;
use App\Models\ScholarshipCountry;
use App\Models\ScholarshipFieldStudy;
use App\Models\ScholarshipLevel;
use App\Models\ScholarshipQualification;
use App\Models\ScholarshipUniversity;
use App\Models\ScholarshipWhoCanApply;
use Illuminate\Http\Request;

class CalenderController extends Controller
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
        $sortSearch = null;
        $scholarships = Calender::orderBy('training_date', 'desc');


        if ($request->search != null) {
            $scholarships = $scholarships->where('training_date', 'like', '%' . $request->search . '%');
            $sortSearch = $request->search;
        }

        return view('admin.training_module.calender.index', compact('scholarships', 'sortSearch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scholarshipCategories = ScholarshipCategory::all();
        $scholarshipLevels = ScholarshipLevel::all();
        $scholarshipUniversities = ScholarshipUniversity::all();
        $scholarshipCountry = ScholarshipCountry::all();
        $scholarshipCity = ScholarshipCity::all();
        $scholarshipQualification = ScholarshipQualification::all();
        $scholarshipWhoCanApply = ScholarshipWhoCanApply::all();
        $scholarshipFieldStudy = ScholarshipFieldStudy::all();

        return view('admin.scholarship_module.scholarship.create', compact(
            'scholarshipCategories',
            "scholarshipLevels",
            'scholarshipUniversities',
            'scholarshipCountry',
            'scholarshipCity',
            'scholarshipQualification',
            'scholarshipWhoCanApply',
            'scholarshipFieldStudy'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'category_id' => 'required',
                'title' => 'required|max:255',
            ]
        );
        $request->validate(
            [
                'level_id' => 'required',
                'title' => 'required|max:255',
            ]
        );
        $request->validate(
            [
                'country_id' => 'required',
                'title' => 'required|max:255',
            ]
        );
        $request->validate(
            [
                'city_id' => 'required',
                'title' => 'required|max:255',
            ]
        );
        $request->validate(
            [
                'qualification_id' => 'required',
                'title' => 'required|max:255',
            ]
        );

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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scholarship = Scholarship::find($id);
        $scholarshipCategories = ScholarshipCategory::all();
        $scholarshipLevels = ScholarshipLevel::all();
        $scholarshipUniversities = ScholarshipUniversity::all();
        $scholarshipCountry = ScholarshipCountry::all();
        $scholarshipCity = ScholarshipCity::all();
        $scholarshipQualification = ScholarshipQualification::all();
        $scholarshipWhoCanApply = ScholarshipWhoCanApply::all();
        $scholarshipFieldStudy = ScholarshipFieldStudy::all();

        return view('admin.scholarship_module.scholarship.edit', compact(
            'scholarship',
            'scholarshipCategories',
            'scholarshipLevels',
            'scholarshipUniversities',
            'scholarshipCountry',
            'scholarshipCity',
            'scholarshipQualification',
            'scholarshipWhoCanApply',
            'scholarshipFieldStudy'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'category_id' => 'required',
                'title' => 'required|max:255',
            ]
        );

        $scholarship = Scholarship::find($id);

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

        flash(translate('Scholarship post has been updated successfully'))->success();
        return redirect()->route('scholarship.index');
    }

    public function changeStatus(Request $request)
    {
        $scholarship = Scholarship::find($request->id);
        $scholarship->status = $request->status;

        $scholarship->save();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Scholarship::find($id)->delete();

        return redirect('admin/scholarship');
    }


    public function allScholarship()
    {
        $scholarships = Scholarship::where('status', 1)->orderBy('created_at', 'asc')->paginate(12);
        dd($scholarships);
        return view("frontend.scholarship.listing", compact('scholarships'));
    }

    public function scholarshipDetails($slug)
    {
        $scholarship = Scholarship::where('slug', $slug)->first();
        return view("frontend.scholarship.details", compact('scholarship'));
    }
}
