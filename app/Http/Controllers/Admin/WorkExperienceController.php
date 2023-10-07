<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\WorkExperience;
use Auth;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    //Adding new work exp info
    public function store(Request $request)
    {
        if (count(Auth::user()->workExperiences) < Auth::user()->userPackage->job_exp_limit) {
            $workExp = new WorkExperience;
            $workExp->user_id = Auth::user()->id;
            $workExp->company_name = $request->company_name;
            $workExp->company_website = $request->company_website;
            $workExp->designation = $request->designation;
            $workExp->description = $request->description;
            $workExp->location = $request->location;
            if ($request->present == 'on') {
                $workExp->present = '1';
                $workExp->start = date($request->start_date);
            } else {
                $workExp->present = '0';
                $workExp->start = date($request->start_date);
                $workExp->end = date($request->end_date);
            }

            $workExp->save();
            flash(translate('New work experience has been added successfully'))->success();
            return redirect()->route('user.profile');
        } else {
            flash(translate('Sorry! Work experience adding limit has been reached.'))->warning();
            return back();
        }
    }

    //Show edit page to update work exp info
    public function edit($id)
    {
        $workExp = WorkExperience::findOrFail(decrypt($id));

        if (isExpert()) {
            return view('frontend.user.expert.setting.work_experience_edit', compact('workExp'));
        }
    }

    //Updating work exp info
    public function update(Request $request, $id)
    {
        $workExp = WorkExperience::findOrFail($id);
        $workExp->user_id = Auth::user()->id;
        $workExp->company_name = $request->company_name;
        $workExp->company_website = $request->company_website;
        $workExp->designation = $request->designation;
        $workExp->description = $request->description;
        $workExp->location = $request->location;
        if ($request->present == 'on') {
            $workExp->present = '1';
            $workExp->start = date($request->start_date);
        } else {
            $workExp->present = '0';
            $workExp->start = date($request->start_date);
            $workExp->end = date($request->end_date);
        }

        if ($workExp->save()) {
            flash(translate('Work Experience has been updated successfully'))->success();
            return redirect()->route('user.profile');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function destroy(Request $request, $id)
    {
        $workExp = WorkExperience::findOrFail(decrypt($id));
        $workExp->delete();

        flash(translate('Work Experience has been deleted successfully'))->success();
        return redirect()->route('user.profile');
    }
}
