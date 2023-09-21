<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

use App\Http\Requests\StoreSeminarRequest;
use App\Http\Requests\UpdateSeminarRequest;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\SitePage;

use Auth;

class SitePagesController extends Controller
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
            $sitepages = SitePage::where('title', 'like', '%'.$search.'%')->get();

            if($input['search'] == ''){
                $sitepages = SitePage::orderBy('created_at', 'asc')->get();
            }
        } else {
            $sitepages = SitePage::orderBy('created_at', 'asc')->get();
        }


        return view('admin.default.optimization.sitepage.index', compact('sitepages','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

        return view('admin.default.optimization.sitepage.create');

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

       

        SitePage::create($input);

        
        flash(translate('Site Page  has been created successfully'))->success();
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
    public function edit(SitePage $site_page)
    {
        return view('admin.default.optimization.sitepage.edit', compact('site_page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SitePage $site_page)
    {
        $input = $request->all();
        $user = Auth::user();

        // $input['updated_at'] = $user->id;
        $site_page->update($input);

        // Delete related seminar_dates
       

        flash(translate( 'Site Page has been updated successfully'))->success();
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
    public function destroy(SitePage $site_page)
    {
        
    
            //  print_r($site_page);
        $site_page->delete();
        

        flash(translate( 'Site Page has been removed successfully'))->success();
        return redirect()->route('page-optimization.index');
    }

}
