<?php

namespace App\Http\Controllers;

class HomeContoroller extends Controller
{
    public function index()
    {
        return view('mypage/home');

    }
}
