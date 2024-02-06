<?php

namespace App\Livewire\Expert\Payment\Withdraw;

use App\Livewire\Expert\Payment\GetPaid;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class Add extends Modal
{
    public $country = 'AU';

    public $currency = 'AUD';

    public $account_holder_name;

    public $account_holder_type = 'individual';

    public $account_type = 'savings';

    public $routing_number;

    public $account_number;


    public function submitPaymentGateway() {
        $this->validate();

        $user = auth()->user();

        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        try {
            $bank_token = $stripe->tokens->create( [
                'bank_account' => [
                    'country'             => $this->country,
                    'currency'            => $this->currency,
                    'account_holder_name' => $this->account_holder_name,
                    'account_holder_type' => $this->account_holder_type,
                    'routing_number'      => $this->routing_number,
                    'account_number'      => $this->account_number,
                ],
            ] );
        } catch (\Stripe\Exception\InvalidRequestException $ex) {
            return toast('warning', $ex->getMessage(), $this);
        } catch (\Exception $ex){
            return toast('warning', $ex->getMessage(), $this);
        }

        if ( $bank_token->id ) {
            try {
                $paymentMethod = $stripe->accounts->createExternalAccount(
                    $user->profile->stripe_acct_id,
                    [ 'external_account' => $bank_token->id ]
                );
            } catch (\Stripe\Exception\InvalidRequestException $ex) {
                return toast('warning', $ex->getMessage(), $this);
            } catch (\Exception $ex){
                return toast('warning', $ex->getMessage(), $this);
            }

            if ( $paymentMethod ) {
                toast('success', 'Bank information added successfully.', $this);
            }
        }

        $this->dispatch('refresh')->to(GetPaid::class);

        $this->close();
    }

    public function rules() {
        return [
            'country'  => 'required',
            'currency' => 'required',
            'account_holder_name' => 'required',
            'account_holder_type' => 'required',
            'routing_number' => 'required',
            'account_number' => 'required'
        ];
    }

    public function render()
    {
        return view('livewire.expert.payment.withdraw.add');
    }
}
