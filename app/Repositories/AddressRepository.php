<?php

namespace App\Repositories;

use App\Models\Address;

class AddressRepository extends AbstractRepository
{
    public Address $model;

    /**
     * @param Address $model
     */
    public function __construct(Address $model)
    {
    }
}
