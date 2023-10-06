<?php

namespace App\Repositories;

use App\Models\Skill;

class SkillRepository
{
    public Skill $model;

    /**
     * @param Skill $model
     */
    public function __construct(Skill $model)
    {
    }
}
