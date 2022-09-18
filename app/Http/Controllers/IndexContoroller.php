<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexContoroller extends Controller
{
    public function index()
    {
        $allCategories = DB::table('types')->get()->all();

        $products = DB::table('products')->get()->all();

        return view('index', [
            'products' => $products,
            'categories' => $allCategories,
        ]);
    }
}
