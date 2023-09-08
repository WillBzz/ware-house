<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index(){
        $products = product::select('*')->get();
        $categories = Category::select('*')->get();
        return view('dashboard.barang.daftarBarang', compact(['products', 'categories']));
    }
    function tambah(Request $request){
        product::create([
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah,
            'price' => $request->harga
        ]);
        return redirect('daftar-barang')->with('toast_success', 'Data Barang Barhasil Ditambahkan');
    }
    function edit(product $barang){
        $aksi = 'edit';
        $target = $barang;
        $categories = Category::where('id', '!=',$target->Category->id)->get();
        $products = product::select('*')->get();
        return view('dashboard.barang.daftarbarang', compact(['categories', 'aksi', 'target','products']));
    }
    function editBarang(Request $request, product $barang){
        product::where('id', $barang->id)->update([
            'name' => $request->nama,
            'category_id' => $request->kateg,
            'qty' => $request->jumlah,
            'price' => $request->harga
        ]);
        return redirect('/daftar-barang')->with('toast_success', 'Data Barang Barhasil Diedit');
    }
    function hapus(product $barang){
        $aksi = 'hapus';
        $target = $barang;
        $products = product::select('*')->get();
        $categories = Category::select('*')->get();
        return view('dashboard.barang.daftarbarang', compact(['products', 'aksi', 'target', 'categories']));
    }
    function hapusBarang(Request $request, product $barang){
        product::where('id', $barang->id)->delete();
        return redirect('/daftar-barang')->with('toast_info', 'Data Barang Barhasil Dihapus');
    }
}
