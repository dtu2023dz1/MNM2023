<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = "admins";
    protected $fillable = [
        'username',
        'password',
        'full_name',
        'email',
        'so_dien_thoai',
        'is_master',
        'is_open',
    ];
}
