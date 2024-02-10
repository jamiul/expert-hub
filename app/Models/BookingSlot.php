<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingSlot extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function consultation_booking() {
        return $this->belongsTo(ConsultationBooking::class);
    }
}
