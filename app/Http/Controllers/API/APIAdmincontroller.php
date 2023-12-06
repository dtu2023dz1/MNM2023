<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class APIAdmincontroller extends Controller
{
    /**
     * GET DATA ADMIN
     *
     * @OA\Get(
     *      path="/api/admin/account/data",
     *      summary="Admin Data",
     *      description="Get Data admin",
     *      tags={"Admin"},
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

        $data = Admin::get();

        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }

    /**
     * Create Admin
     *
     * @OA\Post(
     *      path="/api/admin/account/create",
     *      summary="Create Admin",
     *      description="",
     *      tags={"Admin"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *                   type="object",
     *                   required={"username","full_name", "email", "password", "so_dien_thoai"},
     *                   @OA\Property(property="username", type="text"),
     *                   @OA\Property(property="full_name", type="text"),
     *                   @OA\Property(property="email", type="text"),
     *                   @OA\Property(property="password", type="text"),
     *                   @OA\Property(property="so_dien_thoai", type="number"),
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
    public function store(Request $request)
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
        $data['password'] = bcrypt($data['password']);
        Admin::create($data);

        return response()->json([
            'status'    => 1,
            'message'   => 'Đã tạo tài khoản Admin thành công!',
            'data'      => $data,
        ]);
    }
}
