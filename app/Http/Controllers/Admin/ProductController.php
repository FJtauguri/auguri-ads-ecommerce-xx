<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product_index()
    {
        return view('admin.product.product');
    }

    public function product_create()
    {
        
    }


}
