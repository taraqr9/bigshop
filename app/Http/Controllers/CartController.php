<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function cart(User $user)
    {
        return view('product._cart',[
            'cart'=>$user->find(Auth::user()->id)->cart()->latest()->paginate(10)
        ]);
    }

    public function removeItem($id)
    {
        Cart::where('id',$id)->delete();
        return Redirect::back()->with('itemRemoved','Item Removed!');
    }
}
