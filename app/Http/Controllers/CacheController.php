<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;


use Illuminate\Http\Request;

class CacheController extends Controller
{
       public function getCacheData()
    {
        // Örneğin, 'my_cache_key' anahtarıyla cachelenmiş veriyi çekiyoruz
        $data = Cache::get('fofo');

        return response()->json($data);
    }
}
