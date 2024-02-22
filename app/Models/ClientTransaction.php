<?php

namespace App\Models;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientTransaction extends Model
{
    use SoftDeletes, Searchable;

    protected $guarded = [];

    public function expert(): BelongsTo
    {
        return $this->belongsTo( User::class, 'expert_id', 'id' );
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo( User::class, 'client_id', 'id' );
    }

    protected function invoiceNumber(): Attribute
    {
        return Attribute::make(
            get: fn( mixed $value, array $attributes ) => "T0000" . $this->created_at->format( 'Y' ) . $this->created_at->format( 'm' ) . $this->id,
        );
    }

}
