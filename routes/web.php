<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/debug', function () {
    $messge = 'My first Rollbar error!';
    Log::debug($messge);
    throw new Exception($messge);
});
