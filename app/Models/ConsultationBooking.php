<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsultationBooking extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function consultation() {
        return $this->belongsTo(Consultation::class);
    }
}
