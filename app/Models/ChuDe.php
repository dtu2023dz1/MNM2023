<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuDe extends Model
{
    use HasFactory;

    protected $table = "chu_des";
    protected $fillable = [
        'hash',
        'ten_chu_de',
        'so_thu_tu',
        'is_open',
    ];
}
