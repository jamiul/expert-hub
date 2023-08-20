<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeminarSoftware;


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

        $sort_search = null;

        $query = SeminarSoftware::orderBy('software_name', 'asc'); // Build the initial query

        if ($request->has('search')) {
            $sort_search = $request->search;
            $query->where('software_name', 'like', '%' . $sort_search . '%');
        }

        $seminars = $query->paginate(15); // Paginate the results


        // dd($seminars);
        return view('admin.default.seminar_module.seminar_software.index', compact('seminars', 'sort_search'));
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

        $request->validate([
            'software_name' => 'required|max:255',
        ]);
        $category = new SeminarSoftware;
        $category->software_name = $request->software_name;

        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        // dd($category->slug);
        $category->save();


        flash(translate('Seminar software has been created successfully'))->success();
        return redirect()->route('seminar-software.index');
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
        $seminar = SeminarSoftware::find($id);
        // $all_seminars = SeminarSoftware::all();

        return view('admin.default.seminar_module.seminar_software.edit',  compact('seminar'));
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
            'software_name' => 'required|max:255',
        ]);

        $category = SeminarSoftware::find($id);

        $category->software_name = $request->software_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->software_name));

        $category->save();


        flash(translate('Scholarship study level has been updated successfully'))->success();
        return redirect()->route('seminar-software.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SeminarSoftware::find($id)->delete();

        return redirect('admin/seminar-software');
    }
}
