<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index(){
        $products = Product::select('*')->get();
        $categories = Category::select('*')->get();
        return view('dashboard.barang.daftarBarang', compact(['products', 'categories']));
    }
    function tambah(Request $request){
        Product::create([
            'kode' => $request->kode,
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah
        ]);
        return redirect('daftar-barang')->with('toast_success', 'Data Barang Berhasil Ditambahkan');
    }
    function editBarang(Request $request, Product $barang){
        // dd($request);
        Product::where('id', $request->id)->update([
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah
        ]);
        return redirect('/daftar-barang')->with('toast_success', 'Data Barang Berhasil Diedit');
    }
    function hapusBarang(Request $request, Product $barang){
        Product::where('id', $request->id)->delete();
        return redirect('/daftar-barang')->with('toast_error', 'Data Barang Berhasil Dihapus');
    }
    function deleted(){
        $deletedbarang = Product::onlyTrashed()->get();
        return view('dashboard.barang.barangdeleted', ['deletedbarang' => $deletedbarang]);
    }
    function restore($product_id){
        $deletedbarang = Product::where('id', $product_id)->withTrashed()->first();
        $deletedbarang->restore();
        return redirect('/daftar-barang')->with('toast_success', 'Data Barang Berhasil Dipulihkan');
    }
}
