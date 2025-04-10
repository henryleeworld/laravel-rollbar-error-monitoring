<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/debug', function () {
    $messge = 'My first Rollbar error!';
    echo $messge . PHP_EOL;
    Log::debug($messge);
});
