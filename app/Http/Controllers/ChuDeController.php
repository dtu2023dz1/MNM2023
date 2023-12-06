<?php

namespace App\Http\Controllers;

use App\Models\ChuDe;
use App\Models\Chuong;
use App\Models\DeMuc;
use Illuminate\Http\Request;

class ChuDeController extends Controller
{
    public function viewChuDe()
    {
        return view('admin.page.ChuDe.index');
    }

    public function getData()
    {
        $data = ChuDe::paginate(env('PAGINATE_ADMIN'));
        $dataHomePage = ChuDe::where('is_open', 1)->get();
        $response = [
            'pagination' => [
                'total' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'from' => $data->firstItem(),
                'to' => $data->lastItem()
            ],
            'data'          => $data,
        ];

        return response()->json([
            'data'          => $response,
            'dataHomePage'  => $dataHomePage
        ]);
    }

    public function getDataHomePage()
    {
        $data = ChuDe::where('is_open', 1)->get();


        return response()->json([
            'data'          => $data,
        ]);
    }

    public function doiTrangThai(Request $request)
    {
        $chuDe = ChuDe::find($request->id);

        if ($chuDe) {
            $chuDe->is_open = !$chuDe->is_open;
            $chuDe->save();

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

    public function updateChuDe(Request $request)
    {
        $data = $request->all();

        $chuDe = ChuDe::find($request->id);

        if ($chuDe) {
            $chuDe->update($data);

            return response()->json([
                'status'    => 1,
                'message'   => 'Đã cập nhật chủ đề thành công!',
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Có lỗi!',
            ]);
        }
    }

    public function searchPhapDien(Request $request)
    {
        // dd($request->all());
        $data_chu_de = [];
        $data_de_muc = [];
        $data_chuong = [];

        $id_chu_de = $request->id_chu_de;
        $id_de_muc = $request->id_de_muc;

        if (empty($id_chu_de) && empty($id_de_muc)) {
            $data_chu_de = ChuDe::where('is_open', 1)->get();
            $data_de_muc = DeMuc::where('is_open', 1)->get();
            $data_chuong = Chuong::where('is_open', 1)->get();
        } else {
            $data_chu_de = ChuDe::where('id', $id_chu_de)->where('is_open', 1)->get();
            if (empty($id_de_muc)) {
                $data_de_muc = DeMuc::where('is_open', 1)->get();
                $data_chuong = Chuong::where('is_open', 1)->where('id_chu_de', $id_chu_de)->get();
            } else {
                $data_de_muc = DeMuc::where('id', $id_de_muc)->where('is_open', 1)->get();
                $data_chuong = Chuong::where('id_chu_de', $id_chu_de)
                    ->where('id_de_muc', $id_de_muc)
                    ->where('is_open', 1)
                    ->get();
            }
        }

        return response()->json([
            'data_chu_de'   => $data_chu_de,
            'data_de_muc'   => $data_de_muc,
            'data_chuong'   => $data_chuong,
        ]);
    }
}
