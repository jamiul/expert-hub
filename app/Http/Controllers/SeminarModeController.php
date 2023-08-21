<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeminarMode;



class SeminarModeController extends Controller
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

        if ($request->has('search')){
            $search = $input['search'];
            $seminar_modes = SeminarMode::where('name', 'like', '%'.$search.'%')->get();

            if($input['search'] == ''){
                $seminar_modes = SeminarMode::orderBy('name', 'asc')->get();
            }
        } else {
            $seminar_modes = SeminarMode::orderBy('name', 'asc')->get();
        }

        // $seminar_modes = $seminar_modes->paginate(15);

        return view('admin.default.seminar_module.seminar_mode.index', compact('search', 'seminar_modes'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required|max:255',
        ]);

        SeminarMode::create([
            'name' => $input['name'],
            'slug' => convertSlug($input['name']),
        ]);

        flash(translate('Seminar mode has been created successfully'))->success();
        return redirect()->route('seminar-mode.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SeminarMode $seminar_mode)
    {
        return view('admin.default.seminar_module.seminar_mode.edit',  compact('seminar_mode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeminarMode $seminar_mode)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $seminar_mode->update([
            'name' => $request->name,
            'slug' => convertSlug($request->name),
            ]);

        flash(translate('Seminar Mode has been updated successfully'))->success();

        return redirect()->route('seminar-mode.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeminarMode $seminar_mode)
    {
        $seminar_mode->delete();
        flash(translate('Seminar Mode has been removed successfully'))->success();

        return redirect()->route('seminar-mode.index');
    }
}
