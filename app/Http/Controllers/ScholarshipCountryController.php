<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipCountry;
use Illuminate\Http\Request;

class ScholarshipCountryController extends Controller
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
        $categories = ScholarshipCountry::orderBy('country_name', 'asc');


        if ($request->has('search')) {
            $sort_search = $request->search;
            $categories = $categories->where('country_name', 'like', '%' . $sort_search . '%');
        }

        $categories = $categories->paginate(15);
        // dd($categories);
        return view('admin.default.scholarship_module.country_name.index', compact('categories', 'sort_search'));
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
        $request->validate([
            'country_name' => 'required|max:255',
        ]);

        $category = new ScholarshipCountry;
        // dd($category);
        $category->country_name = $request->country_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->country_name));

        $category->save();


        flash(translate('Scholarship Country Name has been created successfully'))->success();
        return redirect()->route('scholarship-country.index');
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
        $level = ScholarshipCountry::find($id);
        // $all_categories = ScholarshipCountry::all();

        return view('admin.default.scholarship_module.country_name.edit', compact('level'));
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
        $request->validate([
            'country_name' => 'required|max:255',
        ]);

        $category = ScholarshipCountry::find($id);

        $category->country_name = $request->country_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->country_name));

        $category->save();


        flash(translate('Scholarship study level has been updated successfully'))->success();
        return redirect()->route('scholarship-country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        ScholarshipCountry::find($id)->delete();
        return redirect('admin/scholarship-country');
    }
}
