<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    function index()
    {
        $peminjam = Peminjaman::get();
        $products = Product::get();
        $categories = Category::get();
        return view('akun.peminjaman', compact('peminjam', 'products', 'categories'));
    }
    function tambah(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'products_id' => 'required',
            'jumlah_pinjam' => 'required|integer',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date'
        ]);
        return redirect('/peminjam');
    }
}
