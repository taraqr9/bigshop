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

    public function profileUpdate(Request $request)
    {
        User::where('id', Auth::user()->id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return Redirect::back()->with('profileUpdate','Profile updated');
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
