<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipCategory;
use Illuminate\Http\Request;

class ScholarshipCategoryController extends Controller
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
        $categories = ScholarshipCategory::orderBy('category_name', 'asc');

        if ($request->has('search')) {
            $sort_search = $request->search;
            $categories = $categories->where('category_name', 'like', '%' . $sort_search . '%');
        }

        $categories = $categories->paginate(15);
        return view('admin.default.scholarship_module.category.index', compact('categories', 'sort_search'));
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

        $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $category = new ScholarshipCategory;

        $category->category_name = $request->category_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->category_name));

        $category->save();


        flash(translate('Scholarship category has been created successfully'))->success();
        return redirect()->route('scholarship-category.index');
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
        $cateogry = ScholarshipCategory::find($id);
        $all_categories = ScholarshipCategory::all();

        return view('admin.default.scholarship_module.category.edit', compact('cateogry', 'all_categories'));
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
            'category_name' => 'required|max:255',
        ]);

        $category = ScholarshipCategory::find($id);
        $category->category_name = $request->category_name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->category_name));
        $category->save();

        flash(translate('Scholarship category has been updated successfully'))->success();
        return redirect()->route('scholarship-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ScholarshipCategory::find($id)->delete();

        return redirect('admin/scholarship-category');
    }
}
