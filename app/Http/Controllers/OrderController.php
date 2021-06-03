<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order()
    {
        return view('product._order',
        [
            'order'=>User::find(Auth::user()->id)->order()->latest()->paginate(10)
        ]);
    }
}
