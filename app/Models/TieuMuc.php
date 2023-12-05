<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TieuMuc extends Model
{
    use HasFactory;

    protected $table = "tieu_mucs";
    protected $fillable = [
        'ten_tieu_muc',
        'MAPC',
        'id_chuong',
        'id_de_muc',
        'id_chu_de',
        'hash_chu_de',
        'hash_de_muc',
        'hash_chuong',
        'ghi_chu',
        'link_ghi_chu',
        'noi_dung',
        'chi_dan',
        'link_chi_dan',
    ];
}
