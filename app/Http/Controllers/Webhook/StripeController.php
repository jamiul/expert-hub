<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function receiveWebhook(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];

        $payload = @file_get_contents('php://input');

        $event = null;
        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch(\UnexpectedValueException $e) {
            http_response_code(400);
            exit();
        } catch(\Stripe\Exception\SignatureVerificationException $e) {
            http_response_code(400);
            exit();
        }
        switch ($event->type) {
            case 'account.application.authorized':
                $this->__handleApplicationAuthorized( $event );
                break;
            default:
                echo 'Received unknown event type ' . $event->type;
        }
        http_response_code(200);
    }

    public function receiveConnectWebhook(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];

        $payload = @file_get_contents('php://input');

        $event = null;
        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
            Log::info($event);
        } catch(\UnexpectedValueException $e) {
            http_response_code(400);
            exit();
        } catch(\Stripe\Exception\SignatureVerificationException $e) {
            http_response_code(400);
            exit();
        }
        switch ($event->type) {
            case 'account.application.authorized':
                $this->__handleApplicationAuthorized( $event );
                break;
            default:
                echo 'Received unknown event type ' . $event->type;
        }
        http_response_code(200);
    }

    public function testWebhook()
    {

    }

    private function __handleApplicationAuthorized($account)
    {
        try {
            if(!empty($account->account)){
                $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
                $connect_account = $stripe->accounts->retrieve($account->account,
                    []
                );
                Log::info($connect_account);
//                date('Y-m-d H:i:s', $connect_account->created)
            }
        } catch (\Exception $ex){
            echo $ex->getMessage();
            http_response_code($ex->getCode());
            exit();
        }
    }
}
