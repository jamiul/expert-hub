<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Frontend\Controller;
use App\Models\ExpertAccount;
use Auth;
use Illuminate\Http\Request;

class ExpertAccountController extends Controller
{
    // Expert Account related info store like bank, paypal etc
    public function store(Request $request)
    {
        $expertAccount = ExpertAccount::where('user_id', Auth::user()->id)->first();

        if ($expertAccount != null) {
            if ($request->bank_name != null) {
                $expertAccount->bank_name = $request->bank_name;
                $expertAccount->bank_account_name = $request->bank_account_name;
                $expertAccount->bank_account_number = $request->bank_account_number;
                $expertAccount->bank_routing_number = $request->bank_routing_number;
            }
            if ($request->paypal_acc_name != null) {
                $expertAccount->paypal_acc_name = $request->paypal_acc_name;
                $expertAccount->paypal_email = $request->paypal_acc_email;
            }
            if ($expertAccount->save()) {
                flash(translate('Your Info has been updated successfully'))->success();
                return redirect()->route('user.account');
            } else {
                flash(translate('Sorry! Something went wrong.'))->error();
                return back();
            }
        } else {
            $expertAccount = new ExpertAccount;
            $expertAccount->user_id = Auth::user()->id;
            if ($request->bank_name != null) {
                $expertAccount->bank_name = $request->bank_name;
                $expertAccount->bank_account_name = $request->bank_account_name;
                $expertAccount->bank_account_number = $request->bank_account_number;
                $expertAccount->bank_routing_number = $request->bank_routing_number;
            }
            if ($request->paypal_acc_name != null) {
                $expertAccount->paypal_acc_name = $request->paypal_acc_name;
                $expertAccount->paypal_email = $request->paypal_acc_email;
            }
            if ($expertAccount->save()) {
                flash(translate('Your Info has been updated successfully'))->success();
                return redirect()->route('user.account');
            } else {
                flash(translate('Sorry! Something went wrong.'))->error();
                return back();
            }
        }
    }
}
