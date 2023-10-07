<?php

namespace App\Http\Controllers\Frontend;

use App\Models\BookmarkedProject;
use Auth;
use Illuminate\Http\Request;

class BookmarkedProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmarkedProjects = BookmarkedProject::where('user_id', Auth::user()->id)->paginate(8);

        return view('frontend.user.expert.bookmarked-projects', compact('bookmarkedProjects'));
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
    public function store($id)
    {
        $userPackage = Auth::user()->userPackage;
        if ($userPackage->bookmark_project_limit > count(BookmarkedProject::where('user_id', Auth::user()->id)->get())) {
            $bookmarkedProject = new BookmarkedProject;
            $bookmarkedProject->user_id = Auth::user()->id;
            $bookmarkedProject->project_id = decrypt($id);
            $bookmarkedProject->save();
            $userPackage->bookmark_project_limit--;
            $userPackage->save();
        } else {
            flash(translate('Project bookmark limit has been reached.'))->warning();
        }

        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookmarkedProject::destroy($id);
        $userPackage = Auth::user()->userPackage;
        $userPackage->bookmark_project_limit++;
        $userPackage->save();

        return back();
    }
}
