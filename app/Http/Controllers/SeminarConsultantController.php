<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Seminar;
use App\Models\SeminarMode;
use App\Models\SeminarSoftware;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\ServicePackagePayment;
use App\Models\User;
use App\Models\Wallet;
use App\Utility\ServicesUtility;
use App\Utility\ValidationUtility;
use Illuminate\Http\Request;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use Auth;

use Validator;
use Session;

class SeminarConsultantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function seminar_index()
    {
        $services = Auth::user()->services()->paginate(12);
        return view('frontend.default.user.freelancer.projects.seminars.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        dd(getUserRoles());
    $seminar_mode=SeminarMode::all();
    $seminar_software=SeminarSoftware::all();
    $languages=Language::all();
    $all_users=User::all();
    $users = $all_users->where('user_type',"freelancer")->all();




        if(ServicesUtility::can_create_service() == 1)
            return view('frontend.default.user.freelancer.projects.seminars.create',compact('seminar_mode','seminar_software','languages','users'));

        flash(translate('Sorry! Your service creation limit is over.'))->warning();

        return redirect()->route('service.freelancer_index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|max:255',
            'seminar_date' => 'required|array',
            'seminar_date.*' => 'required|date',
            'seminar_mode_id' => 'required',
            'seminar_software_id' => 'required',
            'software_description' => 'required',
            'language_id' => 'required',
            'organiser_certificate' => 'required|max:255',
            'user_id' => 'required',
            'instructor_descriptions' => 'required',
            'slug' => 'required|max:255',
            'course_objectives' => 'required',
            'learning_outcomes' => 'required',
            'teaching_learning_methods' => 'required',
            'teaching_resources' => 'required',
            'seat' => 'required|integer',
        ]);

        $seminar = new Seminar;

        $seminar->title = $request->title;
        $seminar->seminar_date = $request->seminar_date;
        $seminar->seminar_mode_id = $request->seminar_mode_id;
        $seminar->seminar_software_id = $request->seminar_software_id;
        $seminar->software_description = $request->software_description;
        $seminar->language_id = $request->language_id;
        $seminar->organiser_certificate= $request->organiser_certificate	;
        $seminar->user_id= $request->user_id;
        $seminar->instructor_descriptions = $request->instructor_descriptions;
        $seminar->slug = $request->slug;
        $seminar->course_objectives = $request->course_objectives;
        $seminar->learning_outcomes = $request->learning_outcomes;
        $seminar->teaching_learning_methods = $request->teaching_learning_methods;
        $seminar->teaching_resources = $request->teaching_resources;
        $seminar->seat = $request->seat;

        $seminar->save();

        flash(translate('Seminar post has been updated successfully'))->success();
        return redirect()->route('seminar.seminar_index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $seminar_mode=SeminarMode::all();
        $seminar_software=SeminarSoftware::all();
        $languages=Language::all();
        $all_users=User::all();
        $users = $all_users->where('user_type',"freelancer")->all();

        return view('frontend.default.user.freelancer.projects.seminars.edit',compact('seminar_mode','seminar_software','languages','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        return redirect()->route('service.freelancer_index');
    }





}
