<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\ServicePackagePayment;
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
        if(ServicesUtility::can_create_service() == 1)
            return view('frontend.default.user.freelancer.projects.seminars.create');

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


        return view('frontend.default.user.freelancer.projects.seminars.edit');
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
