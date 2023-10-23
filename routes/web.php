<?php

use App\Http\Controllers\CalcController;
use Brick\Math\Internal\Calculator;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/calcs/addition/{number1}/{number2}', function ($number1,$number2) {
//     return view('calcs.addition', 
//     ['number1' => $number1,
//     'number2' => $number2
//     ]);
// });


// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);

//   足し算
Route::get('controller/addition', [CalcController::class, 'addition']);

//   引き算
Route::get('controller/subtraction/{number}', [CalcController::class, 'subtraction']);

// 掛け算
Route::get('controller/multiplication/{number1}/{number2}', [CalcController::class, 'multiplication']);

// 割り算
Route::get('calcs/{number1}/{method}/{number2}', [CalcController::class, 'result']);
