<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Cource\CourceService;

class CourceController extends Controller
{
    protected $courceService;
    public function __construct(
        CourceService $courceService
    ) {
        $this->courceService = $courceService;
    }
    public function cources()
    {
        $cource = $this->courceService->cources();
        return response()->json($cource, 401);
    }
}
