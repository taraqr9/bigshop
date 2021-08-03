<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderController extends Controller
{
    public function order()
    {
        // $order = User::find(Auth::user()->id)->order()->latest()->paginate(10);
        // return view('product._order',compact('order'));
        return view(
            'product._order',
            [
                'order' => User::find(Auth::user()->id)->order()->latest()->paginate(10)
            ]
        );
    }

    public function downloadOrderList()
    {
        // $allOrder = User::find(Auth::user()->id)->order()->latest()->paginate(10);
        // $allOrder = User::all();
        // $pdf = PDF::loadView('product._order',compact('allOrder'));
        // return $pdf->download('OrderList.pdf');

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_customer_data_to_html());
        return $pdf->stream();
    }
}
