<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\ScholarshipWebsiteLink;
use Illuminate\Http\Request;

class ScholarshipWebsiteLinkController extends Controller
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
        $categories = ScholarshipWebsiteLink::orderBy('web_link', 'asc');


        if ($request->has('search')) {
            $sortSearch = $request->search;
            $categories = $categories->where('web_link', 'like', '%' . $sortSearch . '%');
        }

        $categories = $categories->paginate(15);

        return view('admin.scholarship_module.who_can_apply.index', compact('categories', 'sortSearch'));
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
                'web_link' => 'required|max:255',
            ]
        );

        $category = new ScholarshipWebsiteLink();
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
        $level = ScholarshipWebsiteLink::find($id);

        return view('admin.scholarship_module.who_can_apply.edit', compact('level'));
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
                'web_link' => 'required|max:255',
            ]
        );

        $category = ScholarshipWebsiteLink::find($id);

        $category->web_link = $request->web_link;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->web_link));

        $category->save();


        flash(translate('Scholarship city has been updated successfully'))->success();
        return redirect()->route('scholarship-who-can-apply.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        ScholarshipWebsiteLink::find($id)->delete();
        return redirect('admin/scholarship-who-can-apply');
    }
}
