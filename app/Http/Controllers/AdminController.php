<?php

namespace App\Http\Controllers;

use App\Http\Requests\Account\CreateTaiKhoanRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.page.Account.index');
    }

    public function store(CreateTaiKhoanRequest $request)
    {
        $data = $request->all();
        Admin::create($data);
        return response()->json([
            'status' => true,
            'message' => "Thêm mới tài khoản thành công!"
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
}
