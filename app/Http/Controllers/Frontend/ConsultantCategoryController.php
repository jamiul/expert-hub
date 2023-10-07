<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ConsultantCategory;
use App\Utility\CategoryUtility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConsultantCategoryController extends Controller
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
        $consultantCategories = ConsultantCategory::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.expert.consultant_categories.index', compact('consultantCategories'));
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
        $consultantCategory = new ConsultantCategory;
        $consultantCategory->name = $request->name;
        if ($request->parent_id != null) {
            $consultantCategory->parent_id = $request->parent_id;
        }
        $consultantCategory->photo = $request->photo;
        $consultantCategory->slug = Str::slug($request->name, '-') . '-' . Str::random(5);
        $consultantCategory->description = $request->description;
        if ($consultantCategory->save()) {
            flash(translate('New Category has been added successfully!'))->success();
            return redirect()->route('consultant-categories.index');
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
        $consultantCategory = ConsultantCategory::findOrFail(decrypt($id));
        $consultantCategories = ConsultantCategory::whereNotIn('id', CategoryUtility::children_ids($consultantCategory->id, true))->where('id', '!=', $consultantCategory->id)->get();

        return view('admin.expert.consultant_categories.edit', compact(
            'consultantCategory',
            'consultantCategories'
        ));
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
        $consultantCategory = ConsultantCategory::findOrFail($id);
        $consultantCategory->name = $request->name;

        if ($request->parent_id != null) {
            $consultantCategory->parent_id = $request->parent_id;
        }

        $consultantCategory->slug = Str::slug($request->name, '-') . '-' . Str::random(5);
        $consultantCategory->photo = $request->photo;
        $consultantCategory->description = $request->description;

        if ($consultantCategory->save()) {
            flash(translate('New Category has been updated successfully!'))->success();

            return redirect()->route('consultant-categories.index');
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
        // dd($id);
        ConsultantCategory::find($id)->delete();
        flash(translate('Category is deleted'))->success();

        return redirect()->route('consultant-categories.index');
    }
}
