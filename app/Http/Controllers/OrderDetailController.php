<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Pelanggan;
use App\Http\Requests\StoreOrderDetailRequest;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdateOrderDetailRequest;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json('data');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderDetailRequest $request)
    {
        // $data = $request->validate([
        //     'idbarang' => 'required',
        //     'jumlah' => 'required',
        //     'harga' => 'required',
        //     'barang' => 'required',
        //     'idpelanggan' => 'required',
        //     'pelanggan' => 'required',
        //     'alamat' => 'required',
        // ]);
        OrderDetail::create($request->validated());
        return response()->json('data');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderDetailRequest $request, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
?>