<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Chuong;
use Illuminate\Http\Request;

class APIChuongController extends Controller
{
    /**
     * GET DATA CHUONG
     *
     * @OA\Get(
     *      path="/api/admin/chuong/data",
     *      summary="Chuong Data",
     *      description="Get Data Chuong",
     *      tags={"Chuong"},
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

    public function getData()
    {
        $data = Chuong::join('de_mucs', 'de_mucs.id', 'chuongs.id_de_muc')
                      ->join('chu_des', 'chu_des.id', 'chuongs.id_de_muc')
                      ->select('chuongs.*', 'chu_des.ten_chu_de', 'de_mucs.ten_de_muc')
                      ->get();

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
     * DOI TRANG THAI CHUONG
     *
     * @OA\Post(
     *      path="/api/admin/chuong/doi-trang-thai",
     *      summary="Doi Trang Thai Chuong",
     *      description="",
     *      tags={"Chuong"},
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

    /**
     * UPDATE CHUONG
     *
     * @OA\Post(
     *      path="/api/admin/chuong/update",
     *      summary="Update Chuong",
     *      description="",
     *      tags={"Chuong"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *                   type="object",
     *                   required={"id","ten_chuong","so_thu_tu", "is_open"},
     *                   @OA\Property(property="id", type="number"),
     *                   @OA\Property(property="ten_chuong", type="text"),
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
