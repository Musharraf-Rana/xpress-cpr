<?php

namespace App\Helper;

use Illuminate\Support\Facades\Http;


/***************************
Go to config/app
set aliases aliases_name' =>location (App\Helper\Helper::class)
 ********************************/
class Helper
{
    public static function services()
    {
        $response = Http::accept('application/json')->get(env('API_URL') . 'service');
        return $response->json();
    }
}