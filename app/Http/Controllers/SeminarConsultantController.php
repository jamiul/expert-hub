<?php

namespace App\Http\Controllers;

use App\Models\Language;
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
