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

        $sort_search =null;
        $categories = SeminarMode::orderBy('name', 'asc')->get();

        if ($request->has('search')){

            $sort_search = $request->search;
            $categories = $categories->where('name', 'like', '%'.$sort_search.'%');
        }

        return view('admin.default.seminar_module.seminar_Mode.index', compact('categories', 'sort_search'));
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

        $lower_case = strtolower($input['name']);
        $slug = str_replace(' ', '-', $lower_case);

        SeminarMode::create([
            'name' => $input['name'],
            'slug' => $slug,
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
    public function edit($id)
    {
        $level = SeminarMode::find($id);
        // $all_categories = SeminarMode::all();

        return view('admin.default.scholarship_module.study_level.edit',  compact('level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'mode_name	' => 'required|max:255',
        ]);

        $category = SeminarMode::find($id);

        $category->mode_name	 = $request->mode_name	;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->mode_name	));

        $category->save();


        flash(translate('Scholarship study level has been updated successfully'))->success();
        return redirect()->route('scholarship-level.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SeminarMode::find($id)->delete();

        return redirect('admin/scholarship-level');
    }
}
