<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ExpertKYC extends Model implements HasMedia 
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $table = 'expert_kyc';

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'individual_dob',
        'individual_govt_id_number',
        'individual_phone',
        'individual_ssn_last_4',
        'individual_verification_document_front',
        'individual_verification_document_back',
        'individual_verification_additional_document_front',
        'individual_verification_additional_document_back',
        'country',
        'individual_registered_address_city',
        'individual_registered_address_country',
        'individual_registered_address_line1',
        'individual_registered_address_line2',
        'individual_registered_address_postal_code',
        'individual_registered_address_state',
        'tos_acceptance_date',
        'tos_acceptance_ip',
        'documents_bank_account_ownership_verification_files',
        'external_account',
        'status'
    ];
}
