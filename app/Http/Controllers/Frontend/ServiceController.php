<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\InstamojoController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\PaytmController;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\ServicePackagePayment;
use App\Models\Wallet;
use App\Utility\EmailUtility;
use App\Utility\NotificationUtility;
use App\Utility\ServicesUtility;
use App\Utility\ValidationUtility;
use Auth;
use Illuminate\Http\Request;
use Session;
use Validator;
use function App\Http\Controllers\get_email_by_user_id;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:show services'])->only('admin_all_services');
        $this->rules = [
            'title' => 'required',
            'category_id' => 'required',
            'basic_price' => 'required|numeric',
            'basic_delivery_time' => 'required',
            'basic_revision_limit' => 'required',
            'basic_included_description' => 'required',
        ];
        $this->messages = [
            'title.required' => translate('Title is required.'),
            'category_id.required' => translate('Category is required.'),
            'basic_price.required' => translate('Basic Price is required.'),
            'standard_price.numeric' => translate('Standard Price should be a number.'),
            'basic_price.numeric' => translate('Basic price should be a number.'),
            'premium_price.numeric' => translate('Premium price should be a number.'),
            'basic_delivery_time.required' => translate('Basic delivery time limit field is requried.'),
            'basic_revision_limit.required' => translate('Basic Revision limit is required.'),
        ];
    }

    public function expertIndex()
    {
        $services = Auth::user()->services()->paginate(12);
        return view('frontend.user.expert.projects.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (ServicesUtility::can_create_service() == 1) {
            return view('frontend.user.expert.projects.services.create');
        }

        flash(translate('Sorry! Your service creation limit is over.'))->warning();

        return redirect()->route('service.expert_index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (ServicesUtility::can_create_service() != 1) {
            flash(translate('Sorry! Your service creation limit is over.'))->warning();
            return redirect()->route('service.expert_index');
        }

        if (!$this->validate_service($request)) {
            flash(translate('Sorry! Your validation was not successful.'))->error();
            return redirect(route('service.create'));
        }

        $serviceCreated = ServicesUtility::create_service($request);

        if ($serviceCreated == 1) {
            flash(translate('Service saved successfully'))->success();
            return redirect(route('service.expert_index'));
        }

        flash(translate('Service was not saved successfully. Please try again.'))->error();
        return redirect()->route('service.expert_index');
    }

    public function validateService($request)
    {
        $rules = $this->rules;
        $messages = $this->messages;
        $validator = Validator::make($request->all(), $rules, $messages);
        // dd($validator);
        if ($validator->fails()) {
            return 0;
        }

        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->first();
        if ($service != null) {
            $servicePackages = $service->service_packages;

            return view('frontend.services-single', compact('service', 'servicePackages'));
        }

        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $servicePackages = $service->service_packages;

        return view('frontend.user.expert.projects.services.edit', compact('service', 'servicePackages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if (!$this->validate_service($request)) {
            flash(translate('Sorry! Your validation was not successful.'))->error();
            return redirect(route('service.edit', $slug));
        }

        $serviceUpdated = ServicesUtility::updateService($request, $slug);

        if ($serviceUpdated == 1) {
            flash(translate('Service updated successfully'))->success();
            return redirect(route('service.expert_index'));
        }

        flash(translate('Service was not updated successfully. Please try again.'))->error();

        return redirect()->route('service.edit', $serviceUpdated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $servicePackages = $service->service_packages;

        $deletedSuccess = ServicesUtility::delete_service($slug);

        if ($deletedSuccess == 1) {
            flash(translate('Service successfully deleted.'))->success();
        } else {
            flash(translate('Service was not successfully deleted.'))->error();
        }

        return redirect()->route('service.expert_index');
    }

    public function getServicePackagePurchaseModal(Request $request)
    {
        $servicePackage = ServicePackage::findOrFail($request->id);
        return view('service_purchase_modal', compact('servicePackage'));
    }

    public function purchaseServicePackage(Request $request)
    {
        $servicePackage = ServicePackage::findOrFail($request->service_package_id);
        $data['service_package_id'] = $servicePackage->id;
        $data['payment_method'] = $request->payment_option;
        $data['amount'] = $servicePackage->service_price;
        $data['user_id'] = Auth::user()->id;
        $data['payment_type'] = 'service_payment';
        $request->session()->put('payment_data', $data);

        if ($request->payment_option == 'paypal') {
            $paypal = new PayPalController;
            return $paypal->getCheckout();
        } elseif ($request->payment_option == 'stripe') {
            $stripe = new StripePaymentController;
            return $stripe->index();
        } elseif ($request->payment_option == 'sslcommerz') {
            $sslcommerz = new PublicSslCommerzPaymentController;
            return $sslcommerz->index($request);
        } elseif ($request->payment_option == 'paystack') {
            $paystack = new PaystackController;
            return $paystack->redirectToGateway($request);
        } elseif ($request->payment_option == 'instamojo') {
            $instamojo = new InstamojoController;
            return $instamojo->pay($request);
        } elseif ($request->payment_option == 'paytm') {
            $paytm = new PaytmController;
            return $paytm->index();
        } elseif ($request->payment_option == 'flutterwave') {
            $flutterwave = new FlutterwaveController;
            return $flutterwave->initialize();
        } elseif ($request->payment_option == 'wallet') {
            $userProfile = Auth::user()->profile;
            if ($userProfile->balance >= $servicePackage->service_price) {
                $userProfile->balance -= $servicePackage->service_price;
                $userProfile->save();
                return (new ServicePaymentController)->service_package_payment_done(Session::get('payment_data'), null);
            } else {
                flash(translate('You do not have enough wallet balance.'))->error();
                return back();
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.user.expert.projects.services.index');
    }

    public function soldServices()
    {
        $this->middleware('expert');
        $purchasedServices = ServicePackagePayment::where('service_owner_id', Auth::user()->id)->latest()->paginate(12);
        return view('frontend.user.expert.projects.services.purchased', compact('purchasedServices'));
    }

    public function clientPurchasedServices()
    {
        $this->middleware('client');
        $purchasedServices = ServicePackagePayment::where('user_id', Auth::user()->id)->latest()->paginate(12);
        return view('frontend.user.client.services.purchased', compact('purchasedServices'));
    }

    public function adminAllServices()
    {
        $this->middleware('admin');
        $services = Service::latest()->paginate(12);
        return view('admin.services.index', compact('services'));
    }

    public function cancelService($id)
    {
        $purchasedService = ServicePackagePayment::findOrFail($id);

        return view('frontend.user.client.services.service_cancel_request', compact('purchasedService'));
    }

    public function cancelServiceStore(Request $request)
    {
        $purchasedService = ServicePackagePayment::findOrFail($request->purchased_service_id);

        $purchasedService->cancel_requested = 1;
        $purchasedService->cancel_reason = $request->cancel_reason;
        $purchasedService->save();

        flash(translate('Your request was sent to the admin.'))->success();
        return redirect()->route('client.purchased.services');
    }

    public function clientCancelRequestedServices()
    {
        $this->middleware('client');
        $purchasedServices = ServicePackagePayment::where('user_id', Auth::user()->id)->where('cancel_requested', 1)->latest()->paginate(12);
        return view('frontend.user.client.services.cancel_requested', compact('purchasedServices'));
    }

    public function adminRequestedServicesForCancellation()
    {
        $servicePayments = ServicePackagePayment::orderBy('id', 'desc')->where('cancel_requested', 1)->where('cancel_status', 0)->paginate(12);

        return view('admin.service_payment_history.cancel_requested', compact('servicePayments'));
    }

    public function cancelServiceRequestShow(Request $request)
    {
        $requestedCancelService = ServicePackagePayment::findOrFail($request->id);

        return view('admin.service_payment_history.cancel_requested_show_modal', compact('requestedCancelService'));
    }

    public function cancelServiceRequestAccepted(Request $request)
    {

        $requestedCancelService = ServicePackagePayment::findOrFail($request->service_payment_id);
        $requestedCancelService->cancel_status = 1;
        if ($requestedCancelService->save()) {
            $deductExpertAmount = ($requestedCancelService->expert_profit * $request->refund_percentage) / 100;
            $refundToClientAmount = ($requestedCancelService->amount * $request->refund_percentage) / 100;

            $expertProfile = $requestedCancelService->expert->profile;
            $expertProfile->balance = $expertProfile->balance - $deductExpertAmount;
            $expertProfile->save();

            $clientProfile = $requestedCancelService->user->profile;
            $clientProfile->balance = $clientProfile->balance + $refundToClientAmount;
            $clientProfile->save();

            $requestedCancelService->refund_percentage = $request->refund_percentage;
            $requestedCancelService->save();

            $wallet = new Wallet;
            $wallet->user_id = $requestedCancelService->user_id;
            $wallet->amount = $refundToClientAmount;
            $wallet->payment_method = "";
            $wallet->payment_details = "";
            $wallet->type = "Service Cancellation Refund";
            $wallet->save();

            //admin to expert
            NotificationUtility::set_notification(
                "service_cancel_request_approved_by_admin",
                translate('A Service cancellation is approved by '),
                route('service.sold', [], false),
                $requestedCancelService->service_owner_id,
                Auth::user()->id,
                'expert'
            );
            EmailUtility::send_email(
                translate('A Project cancellation is approved'),
                translate('A Project cancellation is approved by ') . Auth::user()->name,
                get_email_by_user_id($requestedCancelService->service_owner_id),
                route('projects.my_cancelled_project')
            );

            //admin to Client
            NotificationUtility::set_notification(
                "service_cancel_request_approved_by_admin",
                translate('A Service cancellation is approved by '),
                route('service.sold', [], false),
                $requestedCancelService->user_id,
                Auth::user()->id,
                'client'
            );
            EmailUtility::send_email(
                translate('A Project cancellation is approved'),
                translate('A Project cancellation is approved by ') . Auth::user()->name,
                get_email_by_user_id($requestedCancelService->user_id),
                route('projects.my_cancelled_project')
            );

            flash(translate('Request has been accepted successfully'))->success();
            return redirect()->route('service_cancellation.requests');
        } else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function adminCancelService($id)
    {
        $requestedService = ServicePackagePayment::findOrFail($id);

        $requestedService->cancel_status = 1;
        $requestedService->cancel_requested = 0;

        $requestedService->save();

        flash(translate('The requested Service was approved for cancellation.'))->success();
        return back();
    }


    public function allCancelledServices()
    {
        $this->middleware('admin');
        $servicePayments = ServicePackagePayment::orderBy('id', 'desc')->where('cancel_status', 1)->paginate(12);

        return view('admin.service_payment_history.cancelled_services', compact('servicePayments'));
    }

    public function clientCancelledServices()
    {
        $this->middleware('client');
        $purchasedServices = ServicePackagePayment::where('user_id', Auth::user()->id)->where('cancel_status', 1)->latest()->paginate(12);

        return view('frontend.user.client.services.cancelled', compact('purchasedServices'));
    }
}
