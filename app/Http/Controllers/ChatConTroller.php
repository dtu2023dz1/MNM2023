<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatConTroller extends Controller
{
    public function index()
    {
        return view('chatbox.share.master');
    }
}
