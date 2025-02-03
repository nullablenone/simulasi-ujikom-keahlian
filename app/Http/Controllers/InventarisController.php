<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventaris = Inventaris::all();
        return view("admin.inventaris.index", compact("inventaris"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.inventaris.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Inventaris();
        $item->kode_inventaris = $request->kode_inventaris;
        $item->nama_barang = $request->nama_barang;
        $item->kondisi = $request->kondisi;
        $item->stok = $request->stok;
        $item->save();

        return redirect()->route("inventaris.index");
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
        $inventaris = Inventaris::find($id);
        return view("admin.inventaris.edit", compact("inventaris"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Inventaris::find($id);
        $item->kode_inventaris = $request->kode_inventaris;
        $item->nama_barang = $request->nama_barang;
        $item->kondisi = $request->kondisi;
        $item->stok = $request->stok;
        $item->save();

        return redirect()->route("inventaris.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Inventaris::find($id);
        $item->delete();
        return redirect()->route("inventaris.index");
    }
}
