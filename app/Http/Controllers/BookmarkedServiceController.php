<?php

namespace App\Http\Controllers;

use App\Models\BookmarkedProject;
use App\Models\BookmarkedScholarship;
use App\Models\BookmarkedService;
use Auth;
use Illuminate\Http\Request;

class BookmarkedServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmarked_projects = BookmarkedProject::where('user_id', Auth::user()->id)->paginate(8);
        return view('frontend.user.freelancer.bookmarked-projects', compact('bookmarked_projects'));
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
    public function store($id)
    {
        // dd($id);
        // $userPackage = Auth::user()->userPackage;
        // if ($userPackage->bookmark_scholarship_limit > count(BookmarkedScholarship::where('user_id', Auth::user()->id)->get())) {
        //     $bookmarked_scholarship = new BookmarkedScholarship();
        //     $bookmarked_scholarship->user_id = Auth::user()->id;
        //     $bookmarked_scholarship->scholarship_id = decrypt($id);
        //     $bookmarked_scholarship->save();
        //     $userPackage->bookmark_scholarship_limit--;
        //     $userPackage->save();
        // }

        $user = Auth::user();
        // dd($users);
        if ($user != null) {
            $bookmarked_service = new BookmarkedService();
            $bookmarked_service->user_id = Auth::user()->id;
            $bookmarked_service->service_id = decrypt($id);
            $bookmarked_service->save();
        } else {
            return redirect()->route('login');
        }
        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookmarkedScholarship::destroy($id);
        // $userPackage = Auth::user()->userPackage;
        // $userPackage->bookmark_scholarship_limit++;
        // $userPackage->save();
        return back();
    }
}
