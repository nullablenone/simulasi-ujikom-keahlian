<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword'); // Ambil keyword dari input
        if ($keyword) {
            // Jika ada keyword, filter data
            $inventaris = Inventaris::cariNama($keyword)->get();
        } else {
            // Jika tidak ada, tampilkan semua data
            $inventaris = Inventaris::all();
        }

        return view('user.home', compact('inventaris', 'keyword'));
    }

    public function peminjaman()
    {
        $inventaris = Inventaris::all();
        return view('user.peminjaman', compact('inventaris'));
    }

    public function peminjamanInventaris(Request $request, $id)
    {
        $inventaris = Inventaris::find($id);
        $inventaris->stok = $inventaris->stok - 1;
        $inventaris->save();

        return redirect()->route('pengguna.peminjaman');


    }
}
