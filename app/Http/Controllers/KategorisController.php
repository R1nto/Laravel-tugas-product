<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Models\Kategoris;
use Illuminate\Http\Request;

class KategorisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategoris::all();
        return response()->json($data);
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
    public function store(StoreKategoriRequest $request)
    {
        Kategoris::create($request->validated());
        return response()->json('Category Created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Kategoris::where('idkategoris',$id)->get();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategoris $kategoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriRequest $request,$id)
    {
        Kategoris::where('idkategoris',$id)->update($request->validated());
        return response()->json('Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Kategoris::where('idkategoris',$id)->delete();
        return response()->json('Category Deleted');
    }
}
?>