<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeMucController extends Controller
{
    public function viewDeMuc(){
        return view('admin.page.DeMuc.index');
    }
}
