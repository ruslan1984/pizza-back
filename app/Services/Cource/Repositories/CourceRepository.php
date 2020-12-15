<?php
namespace App\Services\Cource\Repositories;

class CourceRepository implements ICourceRepository
{
    public function cources():Array{
        // get data;
        return [
            'USD' => 1,
            'EUR' => 0.82
        ];
    }
}
