<?php

namespace App\Http\Controllers;

use App\Models\Chuong;
use Illuminate\Http\Request;

class ChuongController extends Controller
{
    public function viewChuong()
    {
        return view('admin.page.Chuong.index');
    }

    public function getData()
    {
        $data = Chuong::join('de_mucs', 'de_mucs.id', 'chuongs.id_de_muc')
                      ->join('chu_des', 'chu_des.id', 'chuongs.id_de_muc')
                      ->select('chuongs.*', 'chu_des.ten_chu_de', 'de_mucs.ten_de_muc')
                      ->paginate(env('PAGINATE_ADMIN'));

        $response = [
            'pagination' => [
                'total' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'from' => $data->firstItem(),
                'to' => $data->lastItem()
            ],
            'data' => $data,
        ];

        return response()->json([
            'data'    => $response,
        ]);
    }

    public function doiTrangThai(Request $request)
    {
        $chuong = Chuong::find($request->id);

        if($chuong){
            $chuong->is_open = !$chuong->is_open;
            $chuong->save();

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã đổi trạng thái thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Có lỗi!',
            ]);
        }
    }

    public function updateChuong(Request $request)
    {
        $data = $request->all();

        $chuong = Chuong::find($request->id);

        if($chuong){
            $chuong->update($data);

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật chương thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Có lỗi!',
            ]);
        }
    }
}
