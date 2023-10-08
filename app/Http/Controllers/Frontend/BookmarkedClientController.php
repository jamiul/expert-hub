<?php

namespace App\Http\Controllers\Frontend;

use App\Models\BookmarkedClient;
use Auth;
use Illuminate\Http\Request;

class BookmarkedClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmarkedClients = BookmarkedClient::where('user_id', Auth::user()->id)->paginate(8);

        return view('frontend.user.expert.bookmarked-clients', compact('bookmarkedClients'));
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
        if ($userPackage->following_status) {
            $bookmarkedClient = new BookmarkedClient;
            $bookmarkedClient->user_id = Auth::user()->id;
            $bookmarkedClient->client_user_id = decrypt($id);
            $bookmarkedClient->save();
        } else {
            flash(translate('Clinet following option is not available on your package.'))->warning();
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
        BookmarkedClient::destroy($id);
        return back();
    }
}
