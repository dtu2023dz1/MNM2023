<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TieuMucController extends Controller
{
    public function storeApi()
    {
        $client = new Client();
        try {
            $response = $client->get('http://127.0.0.1:3000/get-data');
            $data = json_decode($response->getBody(), true);
            dd($data);
        } catch (\Exception $e) {
            Log::info($e);
            // Xử lý khi có lỗi xảy ra
        }

    }

    public function store(Request $request)
    {
        $data = $request->all();
        Log::info($request->all());
    }
}
