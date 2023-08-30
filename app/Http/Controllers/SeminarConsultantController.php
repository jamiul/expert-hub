<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Validator;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Seminar;
use App\Models\Service;
use App\Models\Language;
use App\Models\SeminarDate;
use App\Models\SeminarMode;
use Illuminate\Http\Request;
use App\Utility\EmailUtility;
use App\Models\ServicePackage;
use App\Models\SeminarSoftware;
use App\Utility\ServicesUtility;
use App\Utility\ValidationUtility;

use App\Utility\NotificationUtility;
use App\Models\ServicePackagePayment;
use App\Http\Requests\StoreSeminarRequest;
use App\Http\Requests\UpdateSeminarRequest;

class SeminarConsultantController extends Controller
{

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
        // $services = Auth::user()->services()->paginate(12);

        return view('frontend.default.user.freelancer.projects.seminars.index', compact('seminars', 'search'));
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
        $user = Auth::user();
        $input = $request->all();
        $input['created_by'] = $user->id;

        $seminar = Seminar::create($input);

        if($request->seminar_date) {
            foreach ($request->seminar_date as $key => $date) {
                SeminarDate::create([
                    'seminar_id' => $seminar->id,
                    'seminar_date' => $input['seminar_date'][$key] ?? '',
                    'descriptions' => $input['date_description'][$key] ?? '',
                ]);
            }
        }

        // $request->validate([
        //     'title' => 'required|max:255',
        //     'seminar_date' => 'required|array',
        //     'seminar_date.*' => 'required|date',
        //     'seminar_mode_id' => 'required',
        //     'seminar_software_id' => 'required',
        //     'software_description' => 'required',
        //     'language_id' => 'required',
        //     'organiser_certificate' => 'required|max:255',
        //     'user_id' => 'required',
        //     'instructor_descriptions' => 'required',
        //     'slug' => 'required|max:255',
        //     'course_objectives' => 'required',
        //     'learning_outcomes' => 'required',
        //     'teaching_learning_methods' => 'required',
        //     'teaching_resources' => 'required',
        //     'seat' => 'required|integer',
        // ]);

        flash(translate('Seminar post has been updated successfully'))->success();
        return redirect()->route('seminar-consultant.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seminar = Seminar::with('seminar_dates')->find($id);

        return view('frontend.default.user.freelancer.projects.seminars.edit', compact('seminar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeminarRequest $request, $id)
    {
        $seminar = Seminar::with('seminar_dates')->find($id);
        $input = $request->all();
        $user = Auth::user();

        $input['updated_by'] = $user->id;
        $seminar->update($input);

        // Delete related seminar_dates
        foreach ($seminar->seminar_dates as $seminarDate) {
            $seminarDate->delete();
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminar $seminar_consultant)
    {
        $seminar_consultant->delete();

        flash(translate( 'Seminar has been removed successfully'))->success();
        return redirect()->route('seminar-consultant.index');
    }





}
