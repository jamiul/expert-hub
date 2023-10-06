<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipWebsiteLinks;
use Illuminate\Http\Request;

class ScholarshipWebsiteLinksController extends Controller
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
        $categories = ScholarshipWebsiteLinks::orderBy('web_link', 'asc');


        if ($request->has('search')) {
            $sort_search = $request->search;
            $categories = $categories->where('web_link', 'like', '%' . $sort_search . '%');
        }

        $categories = $categories->paginate(15);
        // dd($categories);
        return view('admin.default.scholarship_module.who_can_apply.index', compact('categories', 'sort_search'));
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
            'web_link' => 'required|max:255',
            ]
        );

        $category = new ScholarshipWebsiteLinks;
        // dd($category);
        $category->web_link = $request->web_link;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->web_link));

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
        $level = ScholarshipWebsiteLinks::find($id);
        // $all_categories = ScholarshipWebsiteLinks::all();

        return view('admin.default.scholarship_module.who_can_apply.edit', compact('level'));
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
        $request->validate(
            [
            'web_link' => 'required|max:255',
            ]
        );

        $category = ScholarshipWebsiteLinks::find($id);

        $category->web_link = $request->web_link;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->web_link));

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
        ScholarshipWebsiteLinks::find($id)->delete();
        return redirect('admin/scholarship-who-can-apply');
    }
}
