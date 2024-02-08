<?php

namespace App\Models;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsultationBooking extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    // morph relations between contracts
    public function contract()
    {
        return $this->morphTo(Contract::class);
    }

    public function bookingSlots()
    {
        return $this->hasMany(BookingSlot::class);
    }
}
