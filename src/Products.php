<?php namespace Appkonik\Products;

use Illuminate\Support\Facades\Http;

class Products
{
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}
