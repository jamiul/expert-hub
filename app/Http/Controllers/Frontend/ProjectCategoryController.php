<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ProjectCategory;
use App\Utility\CategoryUtility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show project category'])->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectCategories = ProjectCategory::first()->paginate(10);

        return view('admin.project.project_categories.index', compact('projectCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projectCategory = new ProjectCategory;
        $projectCategory->name = $request->name;
        if ($request->parent_id != null) {
            $projectCategory->parent_id = $request->parent_id;
        }
        $projectCategory->photo = $request->photo;
        $projectCategory->slug = Str::slug($request->name, '-') . '-' . Str::random(5);
        $projectCategory->description = $request->description;
        if ($projectCategory->save()) {
            flash(translate('New Category has been added successfully!'))->success();

            return redirect()->route('project-categories.index');
        } else {
            flash(translate('Something went wrong!'))->warning();

            return back();
        }
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
        $projectCategory = ProjectCategory::findOrFail(decrypt($id));
        $projectCategories = ProjectCategory::whereNotIn('id', CategoryUtility::children_ids($projectCategory->id, true))->where('id', '!=', $projectCategory->id)->get();

        return view('admin.project.project_categories.edit', compact('projectCategory', 'projectCategories'));
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
        $projectCategory = ProjectCategory::findOrFail($id);
        $projectCategory->name = $request->name;
        if ($request->parent_id != null) {
            $projectCategory->parent_id = $request->parent_id;
        }
        $projectCategory->slug = Str::slug($request->name, '-') . '-' . Str::random(5);
        $projectCategory->photo = $request->photo;
        $projectCategory->description = $request->description;
        if ($projectCategory->save()) {
            flash(translate('New Category has been updated successfully!'))->success();
            return redirect()->route('project-categories.index');
        } else {
            flash(translate('Something went wrong!'))->warning();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoryUtility::delete_category(decrypt($id));
        flash(translate('Category deleted'))->success();
        return redirect()->route('project-categories.index');
    }
}
