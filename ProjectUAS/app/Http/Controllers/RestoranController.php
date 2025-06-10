<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Services\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RestoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //$order= Order::pluck('order_name','id')->prepend('Please Select','');
        //return view('order/new')->with('order', $order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // $product = Restaurant::find($id);
        // $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = new Cart($oldCart);
        // $cart->add($product, $product->id);
        // Session::put('cart', $cart);
        // $request->session()->get('cart');
        // // return view('restaurant_1', compact('restaurant'));

        // return redirect('/home');


         $restoran=Restoran::findorfail($id);
         dd($restoran);
        return view('restoran_1', compact('restoran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
 **/
}