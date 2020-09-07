<?php

namespace App\Http\Controllers;

use Log;

class RollbarController extends Controller
{
    /**
     * Debug.
     *
     * @return void
     */
    public function debug()
    {
        $messge = '測試除錯訊息';
        echo $messge . PHP_EOL;
        Log::debug($messge);
    }
}
