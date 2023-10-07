<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\EmailManager;
use Illuminate\Http\Request;
use Mail;

class EmailConfigurationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show email setting'])->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.system_configurations.email_config.index');
    }

    public function testEmail(Request $request)
    {
        $array['view'] = 'emails.template';
        $array['subject'] = "SMTP Test";
        $array['from'] = env('MAIL_USERNAME');
        $array['content'] = "This is a test email.";
        $array['link'] = "";

        try {
            Mail::to($request->email)->queue(new EmailManager($array));
        } catch (\Exception $e) {
            dd($e);
        }

        flash(translate('An email has been sent.'))->success();
        return back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
