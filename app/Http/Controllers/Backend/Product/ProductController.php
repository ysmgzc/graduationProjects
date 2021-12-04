<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $brands = Brand::all();
        return view('Backend.Products.product_create', compact('brands'));
    }
}
