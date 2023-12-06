<?php

namespace App\Http\Controllers;

use App\Models\TieuMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoController extends Controller
{
    public function dataExcel()
    {
        $data = TieuMuc::join('chuongs', 'chuongs.id', 'tieu_mucs.id_chuong')
                       ->join('chu_des', 'chu_des.id', 'tieu_mucs.id_chu_de')
                       ->join('de_mucs', 'de_mucs.id', 'tieu_mucs.id_de_muc')
                       ->whereIn('tieu_mucs.id_chu_de', [14])
                       ->select(
                            DB::raw('CONCAT("Trong chủ đề số ", chu_des.so_thu_tu ,": ", chu_des.ten_chu_de, ", ") as chu_de_content'),
                            DB::raw('CONCAT("Ở đề mục số ", de_mucs.so_thu_tu ,": ", de_mucs.ten_de_muc, ",") as de_muc_content'),
                            DB::raw('CONCAT(chuongs.ten_chuong ," có nội dung: ") as chuong_content'),
                            DB::raw('CONCAT(tieu_mucs.ten_tieu_muc ,": ", tieu_mucs.noi_dung, ". ") as content'),
                            DB::raw('CONCAT("Ghi chú ",tieu_mucs.ghi_chu ," (link: ", tieu_mucs.link_ghi_chu, ")") as ghi_chu_content'),
                            DB::raw('CONCAT("Chỉ dẫn ",tieu_mucs.chi_dan ," (", tieu_mucs.link_chi_dan, ")") as chi_dan_content'),
                       )
                    //    ->whereRaw('CHAR_LENGTH(tieu_mucs.noi_dung) <= 3000')
                       ->take(50)
                       ->get();
        // dd($data->toArray());
        foreach ($data as $key => $value) {
            $content = "";
            $number = $key + 2;
            $content = $content . $value->chu_de_content . $value->de_muc_content . $value->chuong_content . $value->content . $value->ghi_chu_content . $value->chi_dan_content;
            echo $formattedNumber = str_pad($number, 9, '0', STR_PAD_LEFT) . " | " . $content . "<br>";
        }
    }
}
