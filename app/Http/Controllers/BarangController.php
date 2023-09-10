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
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah,
            'price' => $request->harga
        ]);
        return redirect('daftar-barang')->with('toast_success', 'Data Barang Berhasil Ditambahkan');
    }
    function edit(Product $barang){
        $aksi = 'edit';
        $target = $barang;
        $categories = Category::where('id', '!=',$target->Category->id)->get();
        $products = Product::select('*')->get();
        return view('dashboard.barang.daftarbarang', compact(['categories', 'aksi', 'target','products']));
    }
    function editBarang(Request $request, Product $barang){
        // dd($request);
        Product::where('id', $request->id)->update([
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah,
            'price' => $request->harga
        ]);
        return redirect('/daftar-barang')->with('toast_success', 'Data Barang Berhasil Diedit');
    }
    function hapus(Product $barang){
        $aksi = 'hapus';
        $target = $barang;
        $products = Product::select('*')->get();
        $categories = Category::select('*')->get();
        return view('dashboard.barang.daftarbarang', compact(['products', 'aksi', 'target', 'categories']));
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
