<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipLevel;
use Illuminate\Http\Request;

class ScholarshipLevelController extends Controller
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
        $sort_search = null;
        $categories = ScholarshipLevel::orderBy('level_name', 'asc');


        if ($request->has('search')) {
            $sort_search = $request->search;
            $categories = $categories->where('level_name', 'like', '%' . $sort_search . '%');
        }

        $categories = $categories->paginate(15);
        // dd($categories);
        return view('admin.default.scholarship_module.study_level.index', compact('categories', 'sort_search'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate(
            [
            'level_name' => 'required|max:255',
            ]
        );

        $category = new ScholarshipLevel;
        // dd($category);
        $category->level_name = $request->level_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->level_name));

        $category->save();


        flash(translate('Scholarship study level has been created successfully'))->success();
        return redirect()->route('scholarship-level.index');
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
    public function edit($id)
    {
        $level = ScholarshipLevel::find($id);
        // $all_categories = ScholarshipLevel::all();

        return view('admin.default.scholarship_module.study_level.edit', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
            'level_name' => 'required|max:255',
            ]
        );

        $category = ScholarshipLevel::find($id);

        $category->level_name = $request->level_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->level_name));

        $category->save();


        flash(translate('Scholarship study level has been updated successfully'))->success();
        return redirect()->route('scholarship-level.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ScholarshipLevel::find($id)->delete();

        return redirect('admin/scholarship-level');
    }
}
