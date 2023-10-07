<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Frontend\Controller;
use App\Http\Controllers\Frontend\SystemConfigurationController;
use App\Utility\SettingsUtility;
use Illuminate\Http\Request;

class GeneralConfigurationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show general setting'])->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.system_configurations.general_config.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->except(['_token']);

        if (!empty($inputs)) {
            foreach ($inputs as $type => $value) {
                SettingsUtility::save_settings($type, trim($value));
                if ($type == 'site_name') {
                    $systemConfig = new SystemConfigurationController;
                    $systemConfig->overWriteEnvFile("APP_NAME", trim($value));
                }
                if ($type == 'timezone') {
                    $systemConfig = new SystemConfigurationController;
                    $systemConfig->overWriteEnvFile('APP_TIMEZONE', trim($value));
                }
            }
        }


        flash("Settings updated successfully")->success();
        return back();
    }
}
