<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chuong extends Model
{
    use HasFactory;
    protected $table = "chuongs";
    protected $fillable = [
        'hash',
        'ten_chuong',
        'so_thu_tu',
        'id_de_muc',
        'id_chu_de',
        'is_open',
        'MAPC',
        'hash_chu_de',
        'hash_de_muc'
    ];
}
