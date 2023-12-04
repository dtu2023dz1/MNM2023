<?php

namespace App\Http\Controllers;

use App\Http\Requests\Account\CreateTaiKhoanRequest;
use App\Http\Requests\Account\DetailTaiKhoanRequest;
use App\Http\Requests\Account\UpdateMatKhauRequest;
use App\Http\Requests\Account\UpdateTaiKhoanRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.page.Account.index');
    }

    public function store(CreateTaiKhoanRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['token']    = Str::uuid();
        Admin::create($data);
        return response()->json([
            'status'    => true,
            'message'   => "Thêm mới tài khoản thành công!"
        ]);
    }

    public function getData()
    {
        $data = Admin::paginate(env('PAGINATE_ADMIN'));
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

    public function update(UpdateTaiKhoanRequest $request)
    {
        $data = $request->all();
        $account = Admin::find($request->id);
        $account->update($data);

        return response()->json([
            'status'    => true,
            'message'   => "Cập nhật tài khoản thành công!"
        ]);
    }

    public function updatePasword(UpdateMatKhauRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $account = Admin::find($request->id);
        $account->update([
            'password' => $data['password']
        ]);

        return response()->json([
            'status'    => true,
            'message'   => "Cập nhật mật khẩu thành công!"
        ]);
    }

    public function changeStatus(DetailTaiKhoanRequest $request)
    {
        $login = Auth::guard('admin')->user();
        $user = Admin::find($request->id);
        if($user->id == $login->id) {
            return response()->json([
                'status'    => false,
                'message'   => "Bạn không thể đổi trạng của chính bạn!"
            ]);
        }
        $user->is_open = !$user->is_open;
        $user->save();

        return response()->json([
            'status'    => true,
            'message'   => "Đổi trạng thái thành công!"
        ]);
    }

    public function destroy(DetailTaiKhoanRequest $request)
    {
        $account = Admin::find($request->id);
        if($account) {
            $account->delete();

            return response()->json([
                'status'    => true,
                'message'   => "Đã xóa tài khoản thành công!"
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "Đã có lỗi xảy ra!"
            ]);
        }
    }

    public function viewLogin()
    {
        $check = Auth::guard('admin')->check();
        if($check) {
            return redirect('/');
        }
        return view('admin.page.SignIn.login');
    }

    public function login(Request $request)
    {
        $check_1  = Auth::guard('admin')->attempt([
            'email' => $request->username,
            'password' => $request->password
        ]);

        $check_2  = Auth::guard('admin')->attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if($check_1 == true || $check_2 == true) {
            $user = Auth::guard('admin')->user();
            if($user->is_open == 1) {
                return response()->json([
                    'status' => 1,
                    'message' => "Đăng nhập thành công!"
                ]);
            } else {
                Auth::guard('admin')->logout();
                return response()->json([
                    'status' => 2,
                    'message' => "Tài Khoản của bạn đã bị khóa!"
                ]);
            }
        } else {
            return response()->json([
                'status' => 0,
                'message' => "Thông tin đăng nhập không chính xác!"
            ]);
        }
    }

    public function homePage()
    {
        return view('admin.page.Home.index');
    }

    public function getToken()
    {
        $user = Auth::guard('admin')->user();
        if($user) {
            return response()->json([
                'status'    => true,
                'user'     => $user
            ]);
        } else {
            return response()->json([
                'status'    => false,
            ]);
        }
    }

    public function changeToken(Request $request)
    {
        $user = Admin::find($request->id);
        if($user) {
            $user->update([
                'token' => Str::uuid()
            ]);

            return response()->json([
                'status' => true,
                'message' => "Đổi API Token thành công!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Đã có lỗi xảy ra!"
            ]);
        }
    }

    public function logout()
    {
        $check = Auth::guard('admin')->check();
        if($check) {
            Auth::guard('admin')->logout();

            toastr()->success("Đăng Xuất Thành Công!");
            return redirect('/admin/login');
        } else {
            toastr()->error("Đã có lỗi xảy ra, vui lòng đăng nhập lại!");
            return redirect('/admin/login');
        }

    }
}
