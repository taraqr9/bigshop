<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts(SubCategory $subCategory,$id)
    {
        return view('product._products',
        ['products' => $subCategory->find($id)->allProducts]);
    }

    public function singleProduct($id)
    {
        return view('product._single_product',
    [
        'product_details' => Products::find($id)
    ]);
    }
}
