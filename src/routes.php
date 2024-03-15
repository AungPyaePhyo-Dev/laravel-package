<?php


use Illuminate\Support\Facades\Route;

    Route::get('calc', function() {
        echo "Calculator starting!";
    }); 

    Route::get('add/{a}/{b}', [Aung\Calc\CalculatorController::class, 'add']);
    Route::get('substract/{a}/{b}', [Aung\Calc\CalculatorController::class, 'substract']);