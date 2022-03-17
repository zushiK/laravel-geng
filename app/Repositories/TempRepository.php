<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Models\Temp;

class TempRepository extends Repository
{
    /**
     * @param Temp $model
     */
    public function __construct(Temp $model)
    {
        $this->model = $model;
    }
}
