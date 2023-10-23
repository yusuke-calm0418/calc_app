<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    // public function addition()
    // {
    //     return view('calcs.addition');
    // }

    // public function subtraction($number)
    // {
    //     return view('calcs.subtraction', ['number' => $number]);
    // }

    // public function multiplication($number1, $number2)
    // {
    //     return view('calcs.multiplication', ['number1' => $number1, 'number2' => $number2]);
    // }

    public function result($number1, $method, $number2)
    {
        if ($method === 'addition') {
            $out = $number1 + $number2;
        } elseif ($method === 'subtraction') {
            $out = $number1 - $number2;
        } elseif($method === 'multiplication') {
            $out = $number1 * $number2;
        } elseif($method === 'division'){
            $out = $number1 / $number2;
        }

        return view('calcs.' . $method, ['number1' => $number1, 'number2' => $number2, 'out' => $out]);
    }
}
