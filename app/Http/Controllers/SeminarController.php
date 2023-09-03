<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSeminarRequest;
use App\Http\Requests\UpdateSeminarRequest;
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
use App\Models\SeminarDate;
use App\Models\SeminarInstructor;
use App\Models\SeminarMode;
use App\Models\SeminarSoftware;
use Auth;

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

        $input = $request->all();
        $search = '';

        if ($request->has('search')){
            $search = $input['search'];
            $seminars = Seminar::where('title', 'like', '%'.$search.'%')->get();

            if($input['search'] == ''){
                $seminars = Seminar::orderBy('created_at', 'asc')->get();
            }
        } else {
            $seminars = Seminar::with('seminar_dates')->orderBy('created_at', 'asc')->get();
        }


        return view('admin.default.seminar_module.seminar.index', compact('seminars','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function store(StoreSeminarRequest $request)
    {
        $user = Auth::user();
        $input = $request->all();
        $input['created_by'] = $user->id;
        $input['user_id'] = $user->id;
        $input['project_category_id'] = $request->seminar_category;

        $seminar = Seminar::create($input);

        if($request->seminar_instructors) {
            foreach ($request->seminar_instructors as $key => $instructor) {
                SeminarInstructor::create([
                    'seminar_id' => $seminar->id,
                    'user_id' => $input['seminar_instructors'][$key] ?? ''
                ]);
            }
        }

        if($request->seminar_date) {
            foreach ($request->seminar_date as $key => $date) {
                SeminarDate::create([
                    'seminar_id' => $seminar->id,
                    'seminar_date' => $input['seminar_date'][$key] ?? '',
                    'descriptions' => $input['date_description'][$key] ?? '',
                ]);
            }
        }

        flash(translate('Seminar has been created successfully'))->success();
        return redirect()->route('seminar.index');
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
    public function edit(Seminar $seminar)
    {
        return view('admin.default.seminar_module.seminar.edit', compact('seminar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeminarRequest $request, Seminar $seminar)
    {
        $input = $request->all();
        $user = Auth::user();

        $input['updated_by'] = $user->id;
        $seminar->update($input);

        // Delete related seminar_dates
        foreach ($seminar->seminar_dates as $seminarDate) {
            $seminarDate->delete();
        }
        foreach ($seminar->seminar_instructors as $instructor) {
            $instructor->delete();
        }

        if($request->seminar_instructors) {
            foreach ($request->seminar_instructors as $key => $instructor) {
                $seminar->seminar_instructors()->create([
                    'user_id' => $input['seminar_instructors'][$key] ?? ''
                ]);
            }
        }

        if($request->seminar_date) {
            foreach ($request->seminar_date as $key => $date) {
                $seminar->seminar_dates()->create([
                    'seminar_date' => $input['seminar_date'][$key] ?? '',
                    'descriptions' => $input['date_description'][$key] ?? '',
                ]);
            }
        }

        flash(translate( 'Seminar has been updated successfully'))->success();
        return redirect()->back();
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
    public function destroy(Seminar $seminar)
    {
        $seminar->delete();

        flash(translate( 'Seminar has been removed successfully'))->success();
        return redirect()->route('seminar.index');
    }

}
