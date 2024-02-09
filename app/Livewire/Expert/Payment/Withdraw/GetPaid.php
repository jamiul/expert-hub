<?php

namespace App\Livewire\Expert\Payment\Withdraw;

use App\Models\ExpertWithdrawal;
use Livewire\Component;
use WireElements\Pro\Components\Modal\Modal;

class GetPaid extends Modal {

    public $expert;

    public $withdrawal_methods;

    public $amount_type;

    public $amount;

    public $total_amount = 0;

    public $withdrawal_method = null;

    public $reference;

    public function submitGetPaid() {
        $user = auth()->user();

        $acct_id = $user->profile->stripe_acct_id;

        $amount    = $this->amount * 100;
        $reference = $this->reference;

        $bank_info = ExpertWithdrawal::where( 'user_id', $user->id )
                                     ->where( 'bank_id', $this->withdrawal_method )
                                     ->first();

        if ( $amount <= $user->profile->balance ) {
            try {
                $stripe = new \Stripe\StripeClient( [
                    "api_key" => env( 'STRIPE_SECRET' ),
                ] );

                $stripe->payouts->create( [
//                'source_type' => 'bank_account',
                    'destination' => $bank_info->bank_id,
                    'amount'      => $amount,
                    'currency'    => $bank_info->currency,
                    'description' => $reference,
                    'metadata'    => [
                        'expert_id' => $user->id
                    ]
                ], [ 'stripe_account' => $acct_id ] );

                toast( 'success', 'Withdraw request was successful.', $this );
            } catch ( \Stripe\Exception\InvalidRequestException $ex ) {
                return toast( 'warning', $ex->getMessage(), $this );
            } catch ( \Exception $ex ) {
                return toast( 'warning', $ex->getMessage(), $this );
            }
        } else {
            return toast( 'warning', 'Amount must be less than or equal to your available balance', $this );
        }

        $this->close();
    }

    public function updatedAmountType() {
        $user = auth()->user();

        if ( $this->amount_type == 'fixed' ) {
            $this->amount = $user->profile->balance;
        }

        $amt = doubleval( $this->amount );

        if ( $amt > 0 ) {
            $this->total_amount = number_format( $amt - 1, 2 );
        } else if ( $amt == 0 ) {
            $this->total_amount = $amt;
        }
    }

    public function updatedAmount() {
        $amt = doubleval( $this->amount );
        if ( $amt >= 0 ) {
            $this->total_amount = number_format( $amt - 1, 2 );
        } else {
            $this->total_amount = 0;
        }
    }

    public function updated( $propertyName ) {
        $this->validateOnly( $propertyName );
    }

    public function rules() {
        $user = auth()->user();

        return [
            'withdrawal_method' => 'required',
            'amount'            => "required|lte:{$user->profile->balance}"
        ];
    }

    public function mount() {
        $user = auth()->user();

        $this->amount = $user->profile->balance;
    }

    public function render() {
        $user = auth()->user();

        $this->expert = $user->profile;

        $this->withdrawal_methods = $user->expert_withdrawal;

        return view( 'livewire.expert.payment.withdraw.get-paid' );
    }
}
