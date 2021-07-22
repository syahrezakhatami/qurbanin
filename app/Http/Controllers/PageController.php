<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function category()
    {
        return view('index_category');
    }

    public function product()
    {
        return view('index_product');
    }

    public function users()
    {
        return view('index_users');
    }

    public function supplier()
    {
        return view('index_supplier');
    }
}
