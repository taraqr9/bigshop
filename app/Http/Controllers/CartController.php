<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Products;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function checkOutAll(Request $request)
    {
        foreach (User::find(Auth::user()->id)->cart as $item) {
            $product = Products::fullDetails()->find($item->products_id);
            $order = new Order([
                'user_id' => Auth::user()->id,
                'products_id' => $product->id,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'quantity' => $item->quantity,
                'user_name' => $request->name,
                'email' => Auth::user()->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
            Cart::where('id',$item->id)->delete();
            
            $order->save();
        }
        return Redirect::back()->with('checkOut_success', 'Your all product ordered successfully.');
    }


    public function addToCart(Request $request, $id)
    {
        $item = Cart::where('user_id', '=', Auth::user()->id)
            ->where('products_id', '=', $id)->count();

        if ($item > 0) {
            $msg = 'Product already added on your cart list !';
        } else {
            DB::table('carts')->insert([
                'user_id' => Auth::user()->id,
                'products_id' => $id,
                'quantity' => $request->quantity,
            ]);
            $msg = 'Product added on your cart';
        }
        return back()->with('cartMsg', $msg);
    }
}
