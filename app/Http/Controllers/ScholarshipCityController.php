<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ScholarshipCity;
use Illuminate\Http\Request;

class ScholarshipCityController extends Controller
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
        $categories = ScholarshipCity::orderBy('city_name', 'asc');


        if ($request->has('search')){
            $sort_search = $request->search;
            $categories = $categories->where('city_name', 'like', '%'.$sort_search.'%');
        }

        $categories = $categories->paginate(15);
        // dd($categories);
        return view('admin.default.scholarship_module.city_name.index', compact('categories', 'sort_search'));
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
        // dd($request);
        $request->validate([
            'city_name' => 'required|max:255',
        ]);

        $category = new ScholarshipCity;
        // dd($category);
        $category->city_name = $request->city_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->city_name));

        $category->save();


        flash(translate('Scholarship City Name has been created successfully'))->success();
        return redirect()->route('scholarship-city.index');
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
        $level = ScholarshipCity::find($id);
        // $all_categories = ScholarshipCity::all();

        return view('admin.default.scholarship_module.city_name.edit',  compact('level'));
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
            'city_name' => 'required|max:255',
        ]);

        $category = ScholarshipCity::find($id);

        $category->city_name = $request->city_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->city_name));

        $category->save();


        flash(translate('Scholarship city has been updated successfully'))->success();
        return redirect()->route('scholarship-city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        ScholarshipCity::find($id)->delete();
        return redirect('admin/scholarship-city');
    }
}
