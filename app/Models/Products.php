<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public static function fullDetails()
    {
        return Products::
        leftJoinSub('select products_id,avg(rating) rating,count(user_id) numOfUser from reviews group by products_id',
        'reviews',
        'reviews.products_id',
        'products.id')->get();
    }

}
