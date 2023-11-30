<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChuongController extends Controller
{
    public function viewChuong()
    {
        return view('admin.page.Chuong.index');
    }
}
