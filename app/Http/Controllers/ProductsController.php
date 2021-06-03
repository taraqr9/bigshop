<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SubCategory;
use Illuminate\Database\Query\Builder;
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
        'product_details' => Products::fullDetails()->find($id)
    ]);
    }

    public function buyNow($id)
    {
        return view('product._checkout',
        ['product'=> Products::fullDetails()->find($id)]);
    }

}
