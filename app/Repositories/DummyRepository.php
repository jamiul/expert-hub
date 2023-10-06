<?php

namespace App\Repositories;

use App\Models\Country;

/**
 * The DummyRepository class.
 */
class DummyRepository extends AbstractRepository
{

    /**
     * @param Country $model
     */
    public function __construct(Country $model)
    {
    }

    /**
     * @param array $attributes
     *
     * @throws \InvalidArgumentException
     */
    public function create(array $attributes): User
    {
        $this->model->fill($attributes);
        $this->model->save();

        return $this->model;
    }

    /**
     * @param string $token
     */
    public function findByToken(string $code): Country
    {
        return $this->model->where('code', $code)
            ->firstOrFail();
    }

    /**
     * @param  string $id
     * @return mixed
     */
    public function findByUniqueId(string $id): Country
    {
        return $this->model->where('id', $id)
            ->firstOrFail();
    }
}
