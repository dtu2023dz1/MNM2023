<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $line_1 = BaiViet::where('tinh_trang', 1)->take(3)->orderByDESC('id')->get();
        $line_2 = BaiViet::where('tinh_trang', 1)->take(5)->get();
        $array = [];
        foreach ($line_1 as $key => $value) {
            array_push($array, $value->id);
        }
        foreach ($line_2 as $key => $value) {
            array_push($array, $value->id);
        }
        $line_3 = BaiViet::where('tinh_trang', 1)->whereNotIn('id', $array)->take(3)->get();
        $line_4 = BaiViet::where('tinh_trang', 1)->get();
        return view('client.page.homepage.index', compact('line_1', 'line_2', 'line_3', 'line_4'));
    }

    public function indexBaiViet($id)
    {
        $bai_viet = BaiViet::find($id);
        return view('client.page.homepage.index_detail', compact('bai_viet'));
    }
}
