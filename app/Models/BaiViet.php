<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;

    protected $table = "bai_viets";

    protected $fillable = [
        'ten_bai_viet',
        'slug_bai_viet',
        'mo_ta',
        'tinh_trang',
        'hinh_anh',
        'id_danh_muc',
    ];
}
