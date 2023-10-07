<?php

namespace App\Http\Controllers;

use App\Models\TrainingMode;
use Illuminate\Http\Request;

class TrainingModeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show blog category'])->only('index');
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
            $training_modes = TrainingMode::where('name', 'like', '%' . $search . '%')->get();

            if ($input['search'] == '') {
                $training_modes = TrainingMode::orderBy('name', 'asc')->get();
            }
        } else {
            $training_modes = TrainingMode::orderBy('name', 'asc')->get();
        }

        return view('admin.training_module.training_mode.index', compact('search', 'training_modes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate(
            [
            'name' => 'required|max:255',
            ]
        );

        TrainingMode::create(
            [
            'name' => $input['name'],
            'slug' => convertSlug($input['name']),
            ]
        );

        flash(translate('Training mode has been created successfully'))->success();

        return redirect()->route('training-mode.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingMode $training_mode)
    {
        return view('admin.training_module.training_mode.edit', compact('training_mode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingMode $training_mode)
    {
        $request->validate(
            [
            'name' => 'required|max:255',
            ]
        );

        $training_mode->update(
            [
            'name' => $request->name,
            'slug' => convertSlug($request->name),
            ]
        );

        flash(translate('Training Mode has been updated successfully'))->success();

        return redirect()->route('training-mode.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingMode $trainingMode)
    {
        $trainingMode->delete();

        flash(translate('Training Mode has been removed successfully'))->success();

        return redirect()->route('training-mode.index');
    }
}
