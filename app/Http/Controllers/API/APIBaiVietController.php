<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaiViet\CreateBaiVietRequest;
use App\Http\Requests\BaiViet\DeleteBaiVietRequest;
use App\Http\Requests\BaiViet\UpdateBaiVietRequest;
use App\Models\BaiViet;
use Illuminate\Http\Request;

class APIBaiVietController extends Controller
{
    /**
     * GET DATA BAI VIET
     *
     * @OA\Get(
     *      path="/api/admin/bai-viet/data",
     *      summary="Bai Viet Data",
     *      description="Get Data Bai Viet",
     *      tags={"Bài Viết"},
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          )
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *         response=422,
     *         description="Missing Data"
     *      )
     * )
     */
    public function getData(Request $request)
    {
        $token = $request->header("token");
        $check = $this->checkToken($token);
        if($check == false) {
            return response()->json([
                'status' => true,
                'message' => 'Token not match!'
            ]);
        }
        $data = BaiViet::orderByDESC('id')->get();

        // $response = [
        //     'pagination' => [
        //         'total' => $data->total(),
        //         'per_page' => $data->perPage(),
        //         'current_page' => $data->currentPage(),
        //         'last_page' => $data->lastPage(),
        //         'from' => $data->firstItem(),
        //         'to' => $data->lastItem()
        //     ],
        //     'data' => $data,
        // ];

        return response()->json([
            'data'    => $data,
        ]);
    }

    /**
     * Create BAI VIET
     *
     * @OA\Post(
     *      path="/api/admin/bai-viet/create",
     *      summary="Create Bai Viet",
     *      description="",
     *      tags={"Bài Viết"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *                   type="object",
     *                   required={"ten_bai_viet","slug_bai_viet", "mo_ta", "tinh_trang", "hinh_anh"},
     *                   @OA\Property(property="ten_bai_viet", type="text"),
     *                   @OA\Property(property="slug_bai_viet", type="text"),
     *                   @OA\Property(property="mo_ta", type="text"),
     *                   @OA\Property(property="tinh_trang", type="number"),
     *                   @OA\Property(property="hinh_anh", type="text"),
     *               ),
     *           ),
     *       ),
     *      @OA\Response(
     *          response=201,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function createBaiViet(CreateBaiVietRequest $request)
    {
        $token = $request->header("token");
        $check = $this->checkToken($token);
        if($check == false) {
            return response()->json([
                'status' => true,
                'message' => 'Token not match!'
            ]);
        }
        $data = $request->all();
        if ($data['hinh_anh'] != null) {
            $file = $request->file('hinh_anh');
            $hinh_anh = $this->getLinkUpdateAVT('image-bai-viet', $file);
            $data['hinh_anh'] = $hinh_anh;
        } else {
            $data['hinh_anh'] = null;
        }
        $data['id_danh_muc'] = null;

        BaiViet::create($data);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã thêm mới bài viết thành công!',
        ]);
    }

    /**
     * DOI TRANG THAI BAI VIET
     *
     * @OA\Post(
     *      path="/api/admin/bai-viet/status",
     *      summary="Doi Trang Thai Bai Viet",
     *      description="",
     *      tags={"Bài Viết"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *                   type="object",
     *                   required={"id"},
     *                   @OA\Property(property="id", type="number"),
     *               ),
     *           ),
     *       ),
     *      @OA\Response(
     *          response=201,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function statusBaiViet(DeleteBaiVietRequest $request)
    {
        $token = $request->header("token");
        $check = $this->checkToken($token);
        if($check == false) {
            return response()->json([
                'status' => true,
                'message' => 'Token not match!'
            ]);
        }
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
/**
     * XOA BAI VIET
     *
     * @OA\Post(
     *      path="/api/admin/bai-viet/delete",
     *      summary="Xoa Bai Viet",
     *      description="",
     *      tags={"Bài Viết"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *                   type="object",
     *                   required={"id"},
     *                   @OA\Property(property="id", type="number"),
     *               ),
     *           ),
     *       ),
     *      @OA\Response(
     *          response=201,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function deleteBaiViet(DeleteBaiVietRequest $request)
    {
        $token = $request->header("token");
        $check = $this->checkToken($token);
        if($check == false) {
            return response()->json([
                'status' => true,
                'message' => 'Token not match!'
            ]);
        }
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
    /**
     * Update BAI VIET
     *
     * @OA\Post(
     *      path="/api/admin/bai-viet/update",
     *      summary="Update Bai Viet",
     *      description="",
     *      tags={"Bài Viết"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *                   type="object",
     *                   required={"id","ten_bai_viet","slug_bai_viet", "mo_ta", "tinh_trang", "hinh_anh"},
     *                   @OA\Property(property="id", type="number"),
     *                   @OA\Property(property="ten_bai_viet", type="text"),
     *                   @OA\Property(property="slug_bai_viet", type="text"),
     *                   @OA\Property(property="mo_ta", type="text"),
     *                   @OA\Property(property="tinh_trang", type="number"),
     *                   @OA\Property(property="hinh_anh", type="text"),
     *               ),
     *           ),
     *       ),
     *      @OA\Response(
     *          response=201,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Register Successfully",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(response=400, description="Bad request"),
     *      @OA\Response(response=404, description="Resource Not Found"),
     * )
     */
    public function updateBaiViet(UpdateBaiVietRequest $request)
    {
        $token = $request->header("token");
        $check = $this->checkToken($token);
        if($check == false) {
            return response()->json([
                'status' => true,
                'message' => 'Token not match!'
            ]);
        }

        $bai_viet = BaiViet::find($request->id);
        if ($bai_viet) {
            $data = $request->all();
            $data['id_danh_muc'] = null;
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
