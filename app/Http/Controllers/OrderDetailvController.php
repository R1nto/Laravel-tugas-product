<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
    //    $data = $request->validate([
    //         'idbarang' => 'required',
    //         'jumlah' => 'required',
    //         'harga' => 'required',
    //         'barang' => 'required',
    //         'idpelanggan' => 'required',
    //         'pelanggan' => 'required',
    //         'alamat' => 'required',
    //     ]);
        OrderDetail::create($request->validate(['idbarang' => 'required',
                'jumlah' => 'required',
                'harga' => 'required',
                'barang' => 'required',
                'idpelanggan' => 'required',
                'pelanggan' => 'required',
                'alamat' => 'required',]));
        return response()->json('data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
?>