<?php

namespace App\Http\Controllers;

use App\Jobs\CreateTieuMucJob;
use App\Models\Chuong;
use App\Models\TieuMuc;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TieuMucController extends Controller
{
    public function storeApi()
    {

    }

    public function store(Request $request)
    {
        $res = $request->all();
        $list_chuong = $res['data'];
        foreach ($list_chuong as $key => $value) {
            CreateTieuMucJob::dispatch($value, $res['id_chu_de'], $res['id_de_muc']);
        }
        return response()->json([
            'status'    => true,
            'message'   => 'Đã xử lý, vui lòng chờ'
        ]);
    }
}
