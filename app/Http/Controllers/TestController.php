<?php


namespace App\Http\Controllers;

use Binance\API;

class TestController
{
    public function test(){

        $api = new API();
        $bookPrices = $api->candlesticks('FILUSDT');

        $ping = $api->systemStatus();

        dd($ping);
        return;
    }
}
