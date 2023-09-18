<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultantCategory;
use App\Utility\CategoryUtility;
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
        $consultant_categories =ConsultantCategory::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.default.freelancer.consultant_categories.index', compact('consultant_categories'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consultant_category = new ConsultantCategory;
        $consultant_category->name = $request->name;
        if ($request->parent_id != null) {
            $consultant_category->parent_id = $request->parent_id;
        }
        $consultant_category->photo = $request->photo;
        $consultant_category->slug = Str::slug($request->name, '-').'-'.Str::random(5);
        $consultant_category->description = $request->description;
        if($consultant_category->save()){
            flash(translate('New Category has been added successfully!'))->success();
            return redirect()->route('consultant-categories.index');
        }
        else {
            flash(translate('Something went wrong!'))->warning();
            return back();
        }
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
        $consultant_category = ConsultantCategory::findOrFail(decrypt($id));
        $consultant_categories = ConsultantCategory::whereNotIn('id',CategoryUtility::children_ids($consultant_category->id,true))->where('id', '!=' , $consultant_category->id)->get();
        return view('admin.default.freelancer.consultant_categories.edit', compact('consultant_category', 'consultant_categories'));

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
        $consultant_category = ConsultantCategory::findOrFail($id);
        $consultant_category->name = $request->name;
        if ($request->parent_id != null) {
            $consultant_category->parent_id = $request->parent_id;
        }
        $consultant_category->slug = Str::slug($request->name, '-').'-'.Str::random(5);
        $consultant_category->photo = $request->photo;
        $consultant_category->description = $request->description;
        if($consultant_category->save()){
            flash(translate('New Category has been updated successfully!'))->success();
            return redirect()->route('consultant-categories.index');
        }
        else {
            flash(translate('Something went wrong!'))->warning();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
