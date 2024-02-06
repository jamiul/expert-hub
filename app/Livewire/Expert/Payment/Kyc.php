<?php

namespace App\Livewire\Expert\Payment;

use App\Models\ExpertKYC;
use App\Models\State;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireElements\Pro\Components\Modal\Modal;

class Kyc extends Modal {

    use WithFileUploads;

    public $expert_kyc;

    public $individual_first_name;

    public $individual_last_name;

    public $availableStates;

    public $address_city;

    public $address_line1;

    public $address_line2;

    public $address_postal_code;

    public $address_state;

    public $address_country;

    public $dob;

    public $phone;

    public $document_front;

    public $document_back;

    public $additional_document_front;

    public $additional_document_back;

    public $document_front_full;

    public $document_back_full;

    public function submitKYC() {
        $this->validate();

        $user = auth()->user();

        $stripe = new \Stripe\StripeClient( [
            "api_key" => env( 'STRIPE_SECRET' ),
        ] );

        $acct_id = $user->profile->stripe_acct_id;
        try {
            $acc_update = $stripe->accounts->update(
                $acct_id,
                [
                    'individual' => [
                        'address' => [
                            'city'        => $this->address_city,
                            'line1'       => $this->address_line1,
                            'line2'       => $this->address_line2,
                            'postal_code' => $this->address_postal_code,
                            'state'       => $this->address_state,
                        ],
                        'phone'   => $this->phone,
                        'dob'     => [
                            'day'   => date( 'd', strtotime( $this->dob ) ),
                            'month' => date( 'm', strtotime( $this->dob ) ),
                            'year'  => date( 'Y', strtotime( $this->dob ) )
                        ]
                    ]
                ]
            );

            $expert_kyc = ExpertKYC::updateOrCreate( [
                'user_id' => $user->id
            ], [
                'individual_dob'                            => Carbon::parse( $this->dob ),
                'individual_phone'                          => $this->phone,
                'individual_registered_address_line1'       => $this->address_line1,
                'individual_registered_address_line2'       => $this->address_line2,
                'individual_registered_address_city'        => $this->address_city,
                'individual_registered_address_state'       => $this->address_state,
                'individual_registered_address_postal_code' => $this->address_postal_code,
                'individual_registered_address_country'     => $this->address_country,
                'details_submitted'                         => $acc_update->details_submitted,
                'payouts_enabled'                           => $acc_update->payouts_enabled,
                'charges_enabled'                           => $acc_update->charges_enabled,
                'requirements'                              => $acc_update->requirements,
                'future_requirements'                       => $acc_update->future_requirements
            ] );
            dd([
                $this->document_front,
                $this->document_back,
                $this->document_front_full,
                $this->document_back_full
            ]);
            if ( $this->document_front ) {
                $this->expert_kyc->addMedia( $this->document_front )->toMediaCollection( 'individual_verification_document_front' );

                $fp    = fopen( $this->expert_kyc->getMedia( 'individual_verification_document_front' )->last()->getPath(), 'r' );
                $files = $stripe->files->create( [
                    'purpose' => 'identity_document',
                    'file'    => $fp
                ], [
                    "stripe_account" => $acct_id
                ] );

                fclose( $fp );
            }
            if ( $this->document_back ) {
                $this->expert_kyc->addMedia( $this->document_back )->toMediaCollection( 'individual_verification_document_back' );

                $fp    = fopen( $this->expert_kyc->getMedia( 'individual_verification_document_back' )->last()->getPath(), 'r' );
                $files = $stripe->files->create( [
                    'purpose' => 'identity_document',
                    'file'    => $fp
                ], [
                    "stripe_account" => $acct_id
                ] );
                fclose( $fp );
            }

            

            if ( $this->additional_document_front ) {
                $this->expert_kyc->addMediaFromRequest( 'additional_document_front' )->toMediaCollection( 'individual_verification_additional_document_front' );

                $fp = fopen($this->expert_kyc->getMedia( 'individual_verification_additional_document_front' )->last()->getPath(), 'r' );
                $stripe->files->create( [
                    'purpose' => 'identity_document',
                    'file'    => $fp,
                ], [
                    "stripe_account" => $acct_id
                ] );
                fclose($fp);
            }
            if ( $this->additional_document_back ) {
                $this->expert_kyc->addMediaFromRequest( 'additional_document_back' )->toMediaCollection( 'individual_verification_additional_document_back' );

                $fp = fopen($this->expert_kyc->getMedia( 'individual_verification_additional_document_back' )->last()->getPath(), 'r' );
                $stripe->files->create( [
                    'purpose' => 'identity_document',
                    'file'    => $fp,
                ], [
                    "stripe_account" => $acct_id
                ] );
                fclose($fp);
            }

            toast( 'success', 'Information submitted successfully', $this );

            $this->dispatch( 'refresh', GetPaid::class );

            $this->close();
        } catch ( \Exception $ex ) {
            return toast( 'warning', $ex->getMessage(), $this );
        }
    }

    public function mount() {
        $user                  = auth()->user();
        $this->availableStates = State::get();

        $this->individual_first_name = $user->expert_kyc?->individual_first_name;
        $this->individual_last_name  = $user->expert_kyc?->individual_last_name;
        $this->dob                   = $user->expert_kyc?->individual_dob;
        $this->address_state         = $user->expert_kyc?->individual_registered_address_state;
        $this->address_city          = $user->expert_kyc?->individual_registered_address_city;
        $this->address_postal_code   = $user->expert_kyc?->individual_registered_address_postal_code;
        $this->address_line1         = $user->expert_kyc?->individual_registered_address_line1;
        $this->address_line2         = $user->expert_kyc?->individual_registered_address_line2;
        $this->address_country       = $user->expert_kyc?->country;
        $this->phone                 = $user->expert_kyc?->individual_phone;
    }

    public function render() {
        $user = auth()->user();

        if ( $user->profile->stripe_acct_id == '' ) {
            return toast( 'error', 'no account', $this );
        }

        $this->expert_kyc = $user->expert_kyc;

        return view( 'livewire.expert.payment.kyc', [
            'user' => $user
        ] );
    }

    public function rules() {
        return [
            'individual_first_name'     => 'required',
            'individual_last_name'      => 'required',
            'dob'                       => 'required',
            'address_line1'             => 'required',
            'address_city'              => 'required',
            'address_state'             => 'required',
            'address_postal_code'       => 'required',
            'address_country'           => 'required',
            'phone'                     => 'required',
            'document_front'            => [
                'nullable',
                File::types( [ 'jpg', 'png', 'jpeg', 'pdf' ] )
            ],
            'document_back'             => [
                'nullable',
                File::types( [ 'jpg', 'png', 'jpeg', 'pdf' ] )
            ],
            'additional_document_front' => [
                'nullable',
                File::types( [ 'jpg', 'png', 'jpeg', 'pdf' ] )
            ],
            'additional_document_back'  => [
                'nullable',
                File::types( [ 'jpg', 'png', 'jpeg', 'pdf' ] )
            ]
        ];
    }
}
