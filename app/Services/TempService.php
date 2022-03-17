<?php

namespace App\Services;

use App\Services\Service;
use App\Repositories\TempRepository;

class TempService extends Service
{
    /**
     * @param TempRepository $repository
     */
    public function __construct(TempRepository $repository)
    {
        $this->repository = $repository;
    }
}
