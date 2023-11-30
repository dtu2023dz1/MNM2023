<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChuDeController extends Controller
{
    public function viewChuDe(){
        return view('admin.page.ChuDe.index');
    }
}
