<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
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


    public function buyNow(Request $request, $id)
    {
        $product = Products::fullDetails()->find($id);
        $order = new Order([
            'user_id' => Auth::user()->id,
            'products_id' => $product->id,
            'product_name' => $product->product_name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'user_name' => $request->name,
            'email' => Auth::user()->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        $order->save();
        return Redirect::back()->with('buy_success', 'Your product ordered successfully.');
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


    public function addReview(Request $request, $id)
    {
        Review::updateOrCreate(
            [
                'products_id' => $id,
                'users_id' => Auth::user()->id,
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
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
