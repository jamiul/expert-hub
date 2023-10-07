<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipWhoCanApply;
use Illuminate\Http\Request;

class ScholarshipWhoCanApplyController extends Controller
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
        $categories = ScholarshipWhoCanApply::orderBy('title', 'asc');


        if ($request->has('search')) {
            $sort_search = $request->search;
            $categories = $categories->where('title', 'like', '%' . $sort_search . '%');
        }

        $categories = $categories->paginate(15);
        // dd($categories);
        return view('admin.scholarship_module.who_can_apply.index', compact('categories', 'sort_search'));
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
            'title' => 'required|max:255',
            ]
        );

        $category = new ScholarshipWhoCanApply;
        // dd($category);
        $category->title = $request->title;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));

        $category->save();


        flash(translate('Scholarship who-can-apply Name has been created successfully'))->success();
        return redirect()->route('scholarship-who-can-apply.index');
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
        $level = ScholarshipWhoCanApply::find($id);
        // $all_categories = ScholarshipWhoCanApply::all();

        return view('admin.scholarship_module.who_can_apply.edit', compact('level'));
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
        // dd($request);
        $request->validate(
            [
            'title' => 'required|max:255',
            ]
        );

        $category = ScholarshipWhoCanApply::find($id);

        $category->title = $request->title;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));

        $category->save();


        flash(translate('Scholarship city has been updated successfully'))->success();
        return redirect()->route('scholarship-who-can-apply.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        ScholarshipWhoCanApply::find($id)->delete();
        return redirect('admin/scholarship-who-can-apply');
    }
}
