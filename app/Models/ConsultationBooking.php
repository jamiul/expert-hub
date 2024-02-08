<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsultationBooking extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function bookingSlots()
    {
        return $this->hasMany(BookingSlot::class);
    }
}
