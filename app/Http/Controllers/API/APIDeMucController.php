<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DeMuc;
use Illuminate\Http\Request;

class APIDeMucController extends Controller
{
    /**
     * GET DATA DE MUC
     *
     * @OA\Get(
     *      path="/api/admin/de-muc/data",
     *      summary="De Muc Data",
     *      description="Get Data De Muc",
     *      tags={"De Muc"},
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
        $data = DeMuc::join('chu_des', 'chu_des.id', 'de_mucs.id_chu_de')
            ->select('de_mucs.*', 'chu_des.ten_chu_de')
            //  ->paginate(env('PAGINATE_ADMIN'));
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
     * DOI TRANG THAI DE MUC
     *
     * @OA\Post(
     *      path="/api/admin/de-muc/doi-trang-thai",
     *      summary="Doi Trang Thai De Muc",
     *      description="",
     *      tags={"De Muc"},
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
        $deMuc = DeMuc::find($request->id);

        if ($deMuc) {
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

    /**
     * UPDATE DE MUC
     *
     * @OA\Post(
     *      path="/api/admin/de-muc/update",
     *      summary="Update De Muc",
     *      description="",
     *      tags={"De Muc"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *                   type="object",
     *                   required={"id","ten_de_muc","so_thu_tu", "is_open"},
     *                   @OA\Property(property="id", type="number"),
     *                   @OA\Property(property="ten_de_muc", type="text"),
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
