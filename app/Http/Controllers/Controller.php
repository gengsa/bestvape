<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $cart = [
            'items'=> [
                'goods1 in best-vape',
                'goods2 in best-vape',
                'goods3 in best-vape',
                'goods4 in best-vape',
                'goods5 in best-vape',
                'goods6 in best-vape',
                'goods7 in best-vape',
            ]

        ];
        return view('index', ['cart' => $cart]);
    }
}
