<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeMuc extends Model
{
    use HasFactory;

    protected $table = "de_mucs";
    protected $fillable =[
        'hash',
        'ten_de_muc',
        'so_thu_tu',
        'id_chu_de',
        'is_open',
    ];
}
