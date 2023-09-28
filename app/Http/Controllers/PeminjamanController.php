<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    function index()
    {
        $peminjam = Peminjaman::get();
        $products = Product::select('*')->get();
        return view('akun.peminjaman', compact('peminjam', 'products'));
    }
    function tambah(Request $request)
    {
         Peminjaman::create([
            'nama' => $request->nama,
            'products_id' => $request->product,
            'jumlah_pinjam' => $request->jumlah,
            'tanggal_pinjam' => $request->tgpm,
            'tanggal_kembali' => $request->tgkm
        ]);
        return redirect('peminjam');
    }
}
