<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ChuDe;
use Illuminate\Http\Request;

class APIChuDeController extends Controller
{
    /**
     * GET DATA CHU DE
     *
     * @OA\Get(
     *      path="/api/admin/chu-de/data",
     *      summary="Chu De Data",
     *      description="Get Data Chu De",
     *      tags={"Chủ Đề"},
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
        $data = ChuDe::get();

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
     * DOI TRANG THAI CHU DE
     *
     * @OA\Post(
     *      path="/api/admin/chu-de/doi-trang-thai",
     *      summary="Doi Trang Thai Chu De",
     *      description="",
     *      tags={"Chủ Đề"},
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
    public function doiTrangThai(Request $request)
    {
        $token = $request->header("token");
        $check = $this->checkToken($token);
        if($check == false) {
            return response()->json([
                'status' => true,
                'message' => 'Token not match!'
            ]);
        }
        $chuDe = ChuDe::find($request->id);

        if($chuDe){
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

    /**
     * UPDATE CHU DE
     *
     * @OA\Post(
     *      path="/api/admin/chu-de/update",
     *      summary="Update Chu De",
     *      description="",
     *      tags={"Chủ Đề"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *                   type="object",
     *                   required={"id","ten_chu_de","so_thu_tu", "is_open"},
     *                   @OA\Property(property="id", type="number"),
     *                   @OA\Property(property="ten_chu_de", type="text"),
     *                   @OA\Property(property="so_thu_tu", type="number"),
     *                   @OA\Property(property="is_open", type="number"),
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
    public function updateChuDe(Request $request)
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

        $chuDe = ChuDe::find($request->id);

        if($chuDe){
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
}
