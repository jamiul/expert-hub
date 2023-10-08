<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ScholarshipQualification;
use Illuminate\Http\Request;

class ScholarshipQualificationController extends Controller
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
        $categories = ScholarshipQualification::orderBy('qualification_name', 'asc');


        if ($request->has('search')) {
            $sortSearch = $request->search;
            $categories = $categories->where('qualification_name', 'like', '%' . $sortSearch . '%');
        }

        $categories = $categories->paginate(15);

        return view('admin.scholarship_module.qualification_name.index', compact('categories', 'sortSearch'));
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
        // dd($request);
        $request->validate(
            [
                'qualification_name' => 'required|max:255',
            ]
        );

        $category = new ScholarshipQualification;

        $category->qualification_name = $request->qualification_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->qualification_name));

        $category->save();


        flash(translate('Scholarship Qualification Name has been created successfully'))->success();
        return redirect()->route('scholarship-qualification.index');
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
        $level = ScholarshipQualification::find($id);

        return view('admin.scholarship_module.qualification_name.edit', compact('level'));
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
                'qualification_name' => 'required|max:255',
            ]
        );

        $category = ScholarshipQualification::find($id);

        $category->qualification_name = $request->qualification_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->qualification_name));

        $category->save();


        flash(translate('Scholarship city has been updated successfully'))->success();
        return redirect()->route('scholarship-qualification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        ScholarshipQualification::find($id)->delete();
        return redirect('admin/scholarship-qualification');
    }
}
