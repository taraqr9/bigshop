<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //

    public function addReview(Request $request, $id)
    {
        Review::updateOrCreate(
            [
                'products_id' => $id,
                'user_id' => Auth::user()->id,
            ],
            [
                'rating' => $request->rating,
                'review' => $request->review,
                'user_name' => Auth::user()->name,
                'user_email' => Auth::user()->email
            ]
        );
        return back()->with('addReview', 'Your review added successfully!');
    }
}
