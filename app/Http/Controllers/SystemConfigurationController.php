<?php

namespace App\Http\Controllers;

use App\Models\SystemConfiguration;
use Artisan;
use Illuminate\Http\Request;
use Session;

class SystemConfigurationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show activation setting'])->only('activation_view');
        $this->middleware(['permission:show freelancer payment'])->only('freelancer_payment_config');
        $this->middleware(['permission:show refund setting'])->only('refund_settings');
    }

    public function activationView()
    {
        return view('admin.system_configurations.activation');
    }

    public function freelancerPaymentConfig()
    {
        return view('admin.system_configurations.freelancer_payment_config');
    }

    public function refundSettings()
    {
        return view('admin.system_configurations.refund_settings');
    }

    public function envKeyUpdate(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
            if ($type == 'DEFAULT_LANGUAGE') {
                Session::put('locale', $request[$type]);
            }
        }

        flash("System Configuration has been updated successfully")->success();
        return back();
    }

    public function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"' . trim($val) . '"';
            if (is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0) {
                file_put_contents(
                    $path,
                    str_replace(
                        $type . '="' . env($type) . '"',
                        $type . '=' . $val,
                        file_get_contents($path)
                    )
                );
            } else {
                file_put_contents($path, file_get_contents($path) . "\r\n" . $type . '=' . $val);
            }
        }
    }

    public function updateActivation(Request $request)
    {
        $env_changes = ['FORCE_HTTPS'];
        if (in_array($request->type, $env_changes)) {
            return $this->updateHttpsSettingsInEnv($request);
        }

        $system_config = SystemConfiguration::where('type', $request->type)->first();
        if ($system_config != null) {
            if ($request->type == 'maintenance_mode' && $request->value == '1') {
                if (env('DEMO_MODE') != 'On') {
                    Artisan::call('down');
                }
            } elseif ($request->type == 'maintenance_mode' && $request->value == '0') {
                if (env('DEMO_MODE') != 'On') {
                    Artisan::call('up');
                }
            }

            $system_config->value = $request->value;
            if ($system_config->save()) {
                return 1;
            } else {
                return 0;
            }
        } else {
            $system_config = new SystemConfiguration;
            $system_config->type = $request->type;
            $system_config->value = $request->value;
            if ($system_config->save()) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    public function updateHttpsSettingsInEnv($request)
    {
        if ($request->type == 'FORCE_HTTPS' && $request->value == 1) {
            $this->overWriteEnvFile($request->type, 'On');

            if (strpos(env('APP_URL'), 'http:') !== false) {
                $this->overWriteEnvFile('APP_URL', str_replace("http:", "https:", env('APP_URL')));
            }
        } elseif ($request->type == 'FORCE_HTTPS' && $request->value == 0) {
            $this->overWriteEnvFile($request->type, 'Off');
            if (strpos(env('APP_URL'), 'https:') !== false) {
                $this->overWriteEnvFile('APP_URL', str_replace("https:", "http:", env('APP_URL')));
            }
        }

        return 1;
    }

    public function update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $system_configuration = SystemConfiguration::where('type', $type)->first();
            if ($system_configuration != null) {
                if (gettype($request[$type]) == 'array') {
                    $system_configuration->value = json_encode($request[$type]);
                } else {
                    $system_configuration->value = $request[$type];
                }
                $system_configuration->save();
            } else {
                $system_configuration = new SystemConfiguration;
                $system_configuration->type = $type;
                if (gettype($request[$type]) == 'array') {
                    $system_configuration->value = json_encode($request[$type]);
                } else {
                    $system_configuration->value = $request[$type];
                }
                $system_configuration->save();
            }
        }
        flash("System Configuration has been updated successfully")->success();
        return back();
    }

    public function homeSettings(Request $request)
    {
        return view('admin.website.home');
    }

    public function slider_setion(Request $request)
    {
        dd($request->all());
    }


    //return policy page
    public function policyIndex($type)
    {
        $policy = SystemConfiguration::where('type', $type)->first();
        return view('admin.policies.index', compact('policy'));
    }

    //policy info update
    public function policyUpdate(Request $request)
    {
        $system_policy = SystemConfiguration::where('type', $request->type)->first();
        $system_policy->value = $request->value;
        $system_policy->save();
        flash("System Policy has been updated successfully")->success();
        return back();
    }
}
