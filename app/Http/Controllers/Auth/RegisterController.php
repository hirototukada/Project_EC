<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntryRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function comfirm(EntryRequest $request)
    {
        dd($request);
        return view('auth.confirm');
    }
}
