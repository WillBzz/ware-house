<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index(){
        $categories = Category::get();
        $aksi = 'tambah';
        return view('dashboard.barang.kategori', compact('categories', 'aksi'));
    }
    function tambah(Request $request){
        Category::create([
            'name' => $request->nama
        ]);
        return redirect('kategori-barang')->with('toast_success', 'Kategori Berhasil Ditambahkan');
    }
    function editJadi(Request $request, Category $category){
        Category::where('id', $request->id)->update([
            'name' => $request->nama
        ]);
        return redirect('/kategori-barang')->with('toast_success', 'Kategori Berhasil Diedit');
    }
    function hapusJadi(Request $request, Category $category){
        Category::where('id', $request->id)->delete();
        return redirect('/kategori-barang')->with('toast_error', 'Kategori Berhasil Dihapus');
    }
    function deleted(){
        $categorydelete = Category::onlyTrashed()->get();
        return view('dashboard.barang.kategorideleted', ['categorydelete' => $categorydelete]);
    }
    function restore($product_id){
        $categorydelete = Category::where('id', $product_id)->withTrashed()->first();
        $categorydelete->restore();
        return redirect('/kategori-barang')->with('toast_success', 'Kategori Berhasil Dipulihkan');
    }
}
