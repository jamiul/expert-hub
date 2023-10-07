<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTrainingRequest;
use App\Models\Language;
use App\Models\Training;
use App\Models\TrainingDate;
use App\Models\TrainingInstructor;
use App\Models\TrainingMode;
use App\Models\TrainingSoftware;
use App\Models\User;
use App\Utility\ServicesUtility;
use Auth;
use Illuminate\Http\Request;

class TrainingConsultantController extends Controller
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

        if ($request->has('search')) {
            $search = $input['search'];
            $training = Training::where('title', 'like', '%' . $search . '%')->get();

            if ($input['search'] == '') {
                $training = Training::orderBy('created_at', 'asc')->get();
            }
        } else {
            $training = Training::with('training_dates')->orderBy('created_at', 'asc')->get();
        }

        return view('frontend.user.expert.projects.trainings.index', compact('training', 'search'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $input = $request->all();
        $input['project_category_id'] = $request->training_category;
        $input['created_by'] = $user->id;

        $training = Training::create($input);

        if ($request->training_date) {
            foreach ($request->training_date as $key => $date) {
                TrainingDate::create(
                    [
                    'training_id' => $training->id,
                    'training_date' => $input['training_date'][$key] ?? null,
                    'descriptions' => $input['date_description'][$key] ?? null,
                    ]
                );
            }
        }

        if ($request->training_instructors) {
            foreach ($request->training_instructors as $key => $instructor) {
                TrainingInstructor::create(
                    [
                    'training_id' => $training->id,
                    'user_id' => $instructor ? $input['training_instructors'][$key] : null
                    ]
                );
            }
        }

        flash(translate('Training post has been updated successfully'))->success();

        return redirect()->route('training-consultant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $training_mode = TrainingMode::all();
        $training_software = TrainingSoftware::all();
        $languages = Language::all();
        $all_users = User::all();
        $users = $all_users->where('user_type', 'expert')->all();

        if (ServicesUtility::can_create_service() == 1) {
            return view('frontend.user.expert.projects.trainings.create', compact('training_mode', 'training_software', 'languages', 'users'));
        }

        flash(translate('Sorry! Your service creation limit is over.'))->warning();

        return redirect()->route('service.expert_index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = Training::with('training_dates')->find($id);

        return view('frontend.user.expert.projects.trainings.edit', compact('training'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingRequest $request, Training $training)
    {
        $input = $request->all();

        $user = Auth::user();

        $input['updated_by'] = $user->id;
        $training->update($input);

        // Delete related training_dates
        foreach ($training->training_dates as $trainingDate) {
            $trainingDate->delete();
        }

        if ($request->training_date) {
            foreach ($request->training_date as $key => $date) {
                $training->training_dates()->create(
                    [
                    'training_date' => $input['training_date'][$key] ?? null,
                    ]
                );
            }
        }

        foreach ($training->training_instructors as $training_instructor) {
            $training_instructor->delete();
        }

        if ($request->training_instructors) {
            foreach ($request->training_instructors as $key => $instructor) {
                $training->training_instructors()->create(
                    [
                    'user_id' => $instructor ? $input['training_instructors'][$key] : null
                    ]
                );
            }
        }

        flash(translate('Training has been updated successfully'))->success();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        $training->delete();

        flash(translate('Training has been removed successfully'))->success();

        return redirect()->route('training-consultant.index');
    }
}
