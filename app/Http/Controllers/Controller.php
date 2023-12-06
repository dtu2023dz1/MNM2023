<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;
/**
 * @OA\Info(
 *    title="APIs DTU_DZ",
 *    version="1.0.0",
 * ),
 *   @OA\SecurityScheme(
 *       securityScheme="bearerAuth",
 *       in="header",
 *       name="bearerAuth",
 *       type="http",
 *       scheme="bearer",
 *       bearerFormat="JWT",
 *    ),
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getLinkUpdateAVT($folder, $file)
    {
        $root_path = public_path();

        $file_extension = $file->getClientOriginalExtension();

        $file_name = Str::slug($file->getClientOriginalName()) . "." . $file_extension;

        $link = '/'.$folder.'/';

        $path = $root_path . '/' . $link;

        $file->move($path, $file_name);

        return $link . $file_name;
    }

    public function checkToken($token)
    {
        $user = Admin::where('token', $token)->first();

        if($user) {
            return true;
        }

        return false;
    }
}
