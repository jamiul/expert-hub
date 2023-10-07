<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;
use App\Models\ScholarshipUniversity;
use Illuminate\Http\Request;

class ScholarshipUniversityController extends Controller
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

        $sortSearch = null;
        $categories = ScholarshipUniversity::orderBy('university_name', 'asc');


        if ($request->has('search')) {
            $sortSearch = $request->search;
            $categories = $categories->where('university_name', 'like', '%' . $sortSearch . '%');
        }

        $categories = $categories->paginate(15);

        return view('admin.scholarship_module.university.index', compact('categories', 'sortSearch'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'university_name' => 'required|max:255',
            ]
        );

        $category = new ScholarshipUniversity;

        $category->university_name = $request->university_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->university_name));

        $category->save();


        flash(translate('Scholarship university has been created successfully'))->success();
        return redirect()->route('scholarship-university.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $level = ScholarshipUniversity::find($id);

        return view('admin.scholarship_module.university.edit', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'university_name' => 'required|max:255',
            ]
        );

        $category = ScholarshipUniversity::find($id);

        $category->university_name = $request->university_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->university_name));

        $category->save();


        flash(translate('Scholarship university has been updated successfully'))->success();
        return redirect()->route('scholarship-university.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ScholarshipUniversity::find($id)->delete();

        return redirect('admin/scholarship-university');
    }
}
