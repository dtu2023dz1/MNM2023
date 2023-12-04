<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaiViet\CreateBaiVietRequest;
use App\Http\Requests\BaiViet\DeleteBaiVietRequest;
use App\Http\Requests\BaiViet\UpdateBaiVietRequest;
use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function index()
    {
        return view('admin.page.BaiViet.index');
    }

    public function getData()
    {
        $data = BaiViet::orderByDESC('id')->paginate(env('PAGINATE_ADMIN'));

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

    public function createBaiViet(CreateBaiVietRequest $request)
    {
        $data = $request->all();

        if (isset($data['hinh_anh']) && $data['hinh_anh'] != null) {
            $file = $request->file('hinh_anh');
            $hinh_anh = $this->getLinkUpdateAVT('image-bai-viet', $file);
            $data['hinh_anh'] = $hinh_anh;
        }

        BaiViet::create($data);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã thêm mới bài viết thành công!',
        ]);
    }

    public function statusBaiViet(DeleteBaiVietRequest $request)
    {
        $bai_viet = BaiViet::find($request->id);
        if ($bai_viet) {
            $bai_viet->tinh_trang = !$bai_viet->tinh_trang;
            $bai_viet->save();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã đổi trạng thái thành công!',
            ]);
        }

        return response()->json([
            'status'    => 0,
            'message'   => 'Bài viết không tồn tại!',
        ]);
    }

    public function deleteBaiViet(DeleteBaiVietRequest $request)
    {
        $bai_viet = BaiViet::find($request->id);
        if ($bai_viet) {
            $bai_viet->delete();
            return response()->json([
                'status'    => 1,
                'message'   => 'Đã xóa bài viết thành công!',
            ]);
        }

        return response()->json([
            'status'    => 0,
            'message'   => 'Bài viết không tồn tại!',
        ]);
    }

    public function updateBaiViet(UpdateBaiVietRequest $request)
    {
        $bai_viet = BaiViet::find($request->id);
        if ($bai_viet) {
            $data = $request->all();
            if (isset($data['hinh_anh']) && $data['hinh_anh'] != null) {
                $file = $request->file('hinh_anh');
                $hinh_anh = $this->getLinkUpdateAVT('image-bao-viet-update', $file);
                $data['hinh_anh'] = $hinh_anh;
            } else {
                $data['hinh_anh'] = $bai_viet->hinh_anh;
            }
            $bai_viet->update($data);

            return response()->json([
                'status'        => 1,
                'message'       => 'Đã cập nhật bài viết thành công!',
            ]);
        }

        return response()->json([
            'status'        => 0,
            'message'       => 'Bài viết không tồn tại!',
        ]);

    }
}
