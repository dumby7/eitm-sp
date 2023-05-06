<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{

    public function test(): View
    {
        $a = 1;
        $b = 2;

        $c = $a + $b;

        return view('test');
    }

}
