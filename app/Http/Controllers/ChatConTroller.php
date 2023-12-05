<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatConTroller extends Controller
{
    public function index()
    {
        return view('chatbox.share.master');
    }

    public function indexContact()
    {
        return view('client.page.homepage.contact');
    }

    public function indexPhapDien()
    {
        return view('client.page.homepage.phap_dien');
    }
}
