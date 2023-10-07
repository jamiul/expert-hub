<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Scholarship;
use App\Models\PageOptimization;
use App\Models\SitePage;
use Auth;
use Illuminate\Http\Request;

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

        if ($request->has('search')) {
            $search = $input['search'];
            $pageoptimizations = PageOptimization::with('sitePage')->where('title', 'like', '%' . $search . '%')->get();

            if ($input['search'] == '') {
                $pageoptimizations = PageOptimization::with('sitePage')->orderBy('created_at', 'asc')->get();
            }
        } else {
            $pageoptimizations = PageOptimization::with('sitePage')->orderBy('created_at', 'asc')->get();
        }

        return view('admin.optimization.pageoptimization.index', compact('pageoptimizations', 'search'));
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
        $user = Auth::user();
        $input = $request->all();
        // $input['created_at'] = $user->id;
        $input['user_id'] = $user->id;


        PageOptimization::create($input);


        flash(translate('Page Optimization  has been created successfully'))->success();
        return redirect()->route('page-optimization.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sitepages = SitePage::all();

        return view('admin.optimization.pageoptimization.create', compact('sitepages'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PageOptimization $pageOptimization)
    {
        $sitepages = SitePage::all();

        return view('admin.optimization.pageoptimization.edit', compact('pageOptimization', 'sitepages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageOptimization $pageOptimization)
    {
        $input = $request->all();
        $user = Auth::user();

        // $input['updated_at'] = $user->id;
        $pageOptimization->update($input);

        flash(translate('Page Optimization has been updated successfully'))->success();

        return redirect()->back();
    }

    public function changeStatus(Request $request)
    {
        $scholarship = Scholarship::find($request->id);
        $scholarship->status = $request->status;

        $scholarship->save();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageOptimization $sitePage)
    {
        $sitePage->delete();
        flash(translate('Page Optimization has been removed successfully'))->success();
        return redirect()->route('page-optimization.index');
    }
}
