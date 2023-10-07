<?php

namespace App\Http\Controllers;

use App\Models\SeminarSoftware;
use Illuminate\Http\Request;

class SeminarSoftwareController extends Controller
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
            $seminar_softwares = SeminarSoftware::where('name', 'like', '%' . $search . '%')->get();

            if ($input['search'] == '') {
                $seminar_softwares = SeminarSoftware::orderBy('name', 'asc')->get();
            }
        } else {
            $seminar_softwares = SeminarSoftware::orderBy('name', 'asc')->get();
        }

        // $seminar_software = $seminar_software->paginate(15);
        return view('admin.seminar_module.seminar_software.index', compact('seminar_softwares', 'search'));
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

        SeminarSoftware::create(
            [
            'name' => $input['name'],
            'slug' => convertSlug($input['name']),
            ]
        );

        flash(translate('Seminar software has been created successfully'))->success();

        return redirect()->route('seminar-software.index');
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
    public function edit(SeminarSoftware $seminar_software)
    {
        return view('admin.seminar_module.seminar_software.edit', compact('seminar_software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeminarSoftware $seminar_software)
    {
        $request->validate(
            [
            'name' => 'required|max:255',
            ]
        );

        $seminar_software->update(
            [
            'name' => $request->name,
            'slug' => convertSlug($request->name),
            ]
        );

        flash(translate('Seminar Software has been updated successfully'))->success();
        return redirect()->route('seminar-software.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeminarSoftware $seminar_software)
    {
        $seminar_software->delete();

        flash(translate('Seminar Software has been Removed successfully'))->success();
        return redirect()->route('seminar-software.index');
    }
}
