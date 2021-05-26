<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function subCategory(){
        return $this->hasMany(SubCategory::class);
    }
}