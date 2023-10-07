<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show all subscribers'])->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscriber::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.marketing.subscribers.index', compact('subscribers'));
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
    public function store(Request $request)
    {
        $subscriber = Subscriber::where('email', $request->email)->first();
        if ($subscriber == null) {
            $subscriber = new Subscriber;
            $subscriber->email = $request->email;
            $subscriber->save();
            flash(translate('You have subscribed successfully'))->success();
        } else {
            flash(translate('You are  already a subscriber'))->success();
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
        Subscriber::destroy($id);
        flash(translate('Subscriber has been deleted successfully'))->success();
        return redirect()->route('subscribers.index');
    }
}
