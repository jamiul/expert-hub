<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingRequest;
use App\Http\Requests\UpdateTrainingRequest;
use App\Models\Language;
use App\Models\Scholarship;
use App\Models\Training;
use App\Models\TrainingDate;
use App\Models\TrainingInstructor;
use App\Models\TrainingMode;
use App\Models\TrainingSoftware;
use Auth;
use Illuminate\Http\Request;

class TrainingController extends Controller
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

        if ($request->has('search')) {
            $search = $input['search'];
            $trainings = Training::where('title', 'like', '%' . $search . '%')->get();

            if ($input['search'] == '') {
                $trainings = Training::orderBy('created_at', 'asc')->get();
            }
        } else {
            $trainings = Training::with('training_dates')->orderBy('created_at', 'asc')->get();
        }


        return view('admin.training_module.training.index', compact('trainings', 'search'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainingRequest $request)
    {
        $user = Auth::user();
        $input = $request->all();
        $input['created_by'] = $user->id;
        $input['user_id'] = $user->id;

        $input['project_category_id'] = $request->training_category;

        $training = Training::create($input);

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

        if ($request->training_date) {
            foreach ($request->training_date as $key => $date) {
                TrainingDate::create(
                    [
                    'training_id' => $training->id,
                    'training_date' => $input['training_date'][$key] ?? '',
                    'descriptions' => $input['date_description'][$key] ?? '',
                    ]
                );
            }
        }
        $training->attachment = $request->attachment;
        flash(translate('Training has been created successfully'))->success();
        return redirect()->route('training.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $training_modes = TrainingMode::all();
        $training_softwares = TrainingSoftware::all();
        $languages = Language::all();
        $course_instructors = getConsultants();

        return view('admin.training_module.training.create', compact('training_modes', 'training_softwares', 'languages', 'course_instructors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        return view('admin.training_module.training.edit', compact('training'));
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
        foreach ($training->training_instructors as $instructor) {
            $instructor->delete();
        }

        if ($request->training_instructors) {
            foreach ($request->training_instructors as $key => $instructor) {
                $training->training_instructors()->create(
                    [
                    'user_id' => $input['training_instructors'][$key] ?? null
                    ]
                );
            }
        }

        if ($request->training_date) {
            foreach ($request->training_date as $key => $date) {
                $training->training_dates()->create(
                    [
                    'training_date' => $input['training_date'][$key] ?? '',
                    'descriptions' => $input['date_description'][$key] ?? '',
                    ]
                );
            }
        }

        flash(translate('Training has been updated successfully'))->success();

        return redirect()->route('training.index');
    }

    public function change_status(Request $request)
    {
        $scholarship = Scholarship::find($request->id);
        $scholarship->status = $request->status;

        $scholarship->save();
        return 1;
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

        return redirect()->route('training.index');
    }
}
