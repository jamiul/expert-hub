<?php

namespace App\Http\Controllers;

use App\Models\TrainingSoftware;
use Illuminate\Http\Request;

class TrainingSoftwareController extends Controller
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
            $training_softwares = TrainingSoftware::where('name', 'like', '%' . $search . '%')->get();

            if ($input['search'] == '') {
                $training_softwares = TrainingSoftware::orderBy('name', 'asc')->get();
            }
        } else {
            $training_softwares = TrainingSoftware::orderBy('name', 'asc')->get();
        }

        return view('admin.training_module.training_software.index', compact('training_softwares', 'search'));
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

        TrainingSoftware::create(
            [
            'name' => $input['name'],
            'slug' => convertSlug($input['name']),
            ]
        );

        flash(translate('Training software has been created successfully'))->success();

        return redirect()->route('training-software.index');
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
    public function edit(TrainingSoftware $training_software)
    {
        return view('admin.training_module.training_software.edit', compact('training_software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingSoftware $training_software)
    {
        $request->validate(
            [
            'name' => 'required|max:255',
            ]
        );

        $training_software->update(
            [
            'name' => $request->name,
            'slug' => convertSlug($request->name),
            ]
        );

        flash(translate('Training Software has been updated successfully'))->success();

        return redirect()->route('training-software.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingSoftware $training_software)
    {
        $training_software->delete();

        flash(translate('Training Software has been Removed successfully'))->success();

        return redirect()->route('training-software.index');
    }
}
