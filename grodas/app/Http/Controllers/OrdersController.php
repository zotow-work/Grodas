<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function index()
    {
        //
        $orders = \App\Models\Order::all();
        return response()->json($orders);
    }
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'products' => 'required',
        ]);
        $order = \App\Models\Order::create($request->all());
        return response()->json($order);
    }
    public function show($id)
    {
        //
        $order = \App\Models\Order::find($id);
        return response()->json($order);
    }
    public function update(Request $request, $id)
    {
        //Validate
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'products' => 'required',
        ]);

        $order = \App\Models\Order::find($id);
        $order->update($request->all());
        return response()->json($order);
    }
    public function destroy($id)
    {
        //
        $order = \App\Models\Order::find($id);
        $order->delete();
        return response()->json('deleted');
    }
}
