<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function showSubCategory(Category $category,$id)
    {
        return view('product._subcategory',
        ['subcategory' => $category->find($id)->subCategory]);
    }
}
