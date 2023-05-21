<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScholarshipCategory;
use App\Models\Scholarship;
use App\Models\ScholarshipLevel;

class ScholarshipController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show all blogs'])->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $blogs = Scholarship::orderBy('created_at', 'desc');


        if ($request->search != null){
            $blogs = $blogs->where('title', 'like', '%'.$request->search.'%');
            $sort_search = $request->search;
        }

        $blogs = $blogs->paginate(15);
        // dd($blogs);

        return view('admin.default.scholarship_module.scholarship.index', compact('blogs','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_categories = ScholarshipCategory::all();
        $blog_levels = ScholarshipLevel::all();

        return view('admin.default.scholarship_module.scholarship.create', compact('blog_categories',"blog_levels"));

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
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);
        $request->validate([
            'level_id' => 'required',
            'title' => 'required|max:255',
        ]);

        $blog = new Scholarship;

        $blog->category_id = $request->category_id;
        $blog->level_id = $request->level_id;
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->banner = $request->banner;
        $blog->meta_title = $request->meta_title;
        $blog->description = $request->description;
        $blog->meta_img = $request->meta_img;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $blog->save();

        flash(translate('Blog post has been created successfully'))->success();
        return redirect()->route('scholarship.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Scholarship::find($id);
        $blog_categories = ScholarshipCategory::all();

        return view('admin.default.scholarship_module.scholarship.edit', compact('blog','blog_categories'));
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
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);

        $blog = Scholarship::find($id);

        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
        $blog->banner = $request->banner;
        $blog->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;

        $blog->meta_title = $request->meta_title;
        $blog->meta_img = $request->meta_img;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;

        $blog->save();

        flash(translate('Blog post has been updated successfully'))->success();
        return redirect()->route('scholarship.index');
    }

    public function change_status(Request $request) {
        $blog = Scholarship::find($request->id);
        $blog->status = $request->status;

        $blog->save();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Scholarship::find($id)->delete();

        return redirect('admin/blogs');
    }


    public function all_blog() {
        $blogs = Scholarship::where('status', 1)->orderBy('created_at', 'desc')->paginate(12);
        return view("frontend.default.scholarship.listing", compact('blogs'));
    }

    public function blog_details($slug) {
        $blog = Scholarship::where('slug', $slug)->first();
        return view("frontend.default.scholarship.details", compact('blog'));
}
}