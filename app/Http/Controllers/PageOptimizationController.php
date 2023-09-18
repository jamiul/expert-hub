<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Language;
use Illuminate\Http\Request;

use Auth;
use App\Models\PageOptimization;
use App\Models\SitePage;

class PageOptimizationController extends Controller
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

        $input = $request->all();
        $search = '';

        if ($request->has('search')){
            $search = $input['search'];
            $pageoptimizations = PageOptimization::with('site_pages')->where('title', 'like', '%'.$search.'%')->get();

            if($input['search'] == ''){
                $pageoptimizations = PageOptimization::with('site_pages')->orderBy('created_at', 'asc')->get();
            }
        } else {
            $pageoptimizations = PageOptimization::with('site_pages')->orderBy('created_at', 'asc')->get();
        }

        // dd($pageoptimizations);
        return view('admin.default.optimization.pageoptimization.index', compact('pageoptimizations','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sitepages = SitePage::all();

        return view('admin.default.optimization.pageoptimization.create',compact('sitepages'));

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
        $user = Auth::user();
        $input = $request->all();
        // $input['created_at'] = $user->id;
        $input['user_id'] = $user->id;

       

        PageOptimization::create($input);

        
        flash(translate('Page Optimization  has been created successfully'))->success();
        return redirect()->route('page-optimization.index');
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
    public function edit(PageOptimization $page_optimization)
    {
        $sitepages = SitePage::all();
        return view('admin.default.optimization.pageoptimization.edit', compact('page_optimization','sitepages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageOptimization $page_optimization)
    {
        $input = $request->all();
        $user = Auth::user();

        // $input['updated_at'] = $user->id;
        $page_optimization->update($input);

        // Delete related seminar_dates
       

        flash(translate( 'Page Optimization has been updated successfully'))->success();
        return redirect()->back();
    }

    public function change_status(Request $request) {
        $scholarship = Scholarship::find($request->id);
        $scholarship->status = $request->status;

        $scholarship->save();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageOptimization $page_optimization)
    {
        
    
            //  print_r($site_page);
        $site_page->delete();
        

        flash(translate( 'Page Optimization has been removed successfully'))->success();
        return redirect()->route('page-optimization.index');
    }

}
