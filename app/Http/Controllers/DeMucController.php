<?php

namespace App\Http\Controllers;

use App\Models\DeMuc;
use Illuminate\Http\Request;

class DeMucController extends Controller
{
    public function viewDeMuc(){
        return view('admin.page.DeMuc.index');
    }

    public function getData()
    {
        $data = DeMuc::join('chu_des', 'chu_des.id', 'de_mucs.id_chu_de')
                     ->select('de_mucs.*', 'chu_des.ten_chu_de')
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
        $deMuc = DeMuc::find($request->id);

        if($deMuc){
            $deMuc->is_open = !$deMuc->is_open;
            $deMuc->save();

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

    public function updateDeMuc(Request $request)
    {
        $data = $request->all();

        $deMuc = DeMuc::find($request->id);

        if($deMuc){
            $deMuc->update($data);

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật đề mục thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Có lỗi!',
            ]);
        }
    }
}
