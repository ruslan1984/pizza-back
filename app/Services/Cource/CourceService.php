<?php

namespace App\Services\Cource;
use App\Services\Cource\Repositories\CourceRepository;

class CourceService
{
    private $courceRepository;
    public function __construct(CourceRepository $courceRepository) {
        $this->courceRepository = $courceRepository;
    }
    public function cources()
    {
        return $this->courceRepository->cources();
    }
}
