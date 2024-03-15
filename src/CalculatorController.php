<?php

namespace Aung\Calc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a, $b) {
        $result =  $a + $b;
        return view('calc::add', compact('result'));
    }

    public function substract($a, $b) {
        $result = $a - $b;
        return view('calc::add', compact('result'));
    }
}
