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
        $kode = $this->generateUniqueCode();
        return view('dashboard.barang.daftarBarang', compact(['products', 'categories', 'kode']));
    }
    public function generateUniqueCode()
    {
        // variable 'characters' yang berisi karakter yang akan digunakan untuk meng-Generate kode unik
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersNumber = strlen($characters);
        //panjang dari kode yang ingin generate
        $codeLength = 5;

        // variable kosong untuk menyimpan kode unik
        $code = '';

        // perulangan yang menggunakan panjang dari variable code sebagai kondisi
        while (strlen($code) < $codeLength) {
            // mengambil posisi random dari angka 0 sampai banyak karakter -1
            $position = rand(0, $charactersNumber - 1);
            // mengambil karakter (1) dari string characters
            $character = $characters[$position];
            // menambahkan code dengan character yang sudah didapat
            $code = $code . $character;
        }
        // mengecek apakah di dalam tabel room terdapat kolom code yang nilai nya seperti kode yang dibuat
        if (Product::where('kode', $code)->exists()) {
            // jika ada, akan mengerjakan ulang fungsi
            $this->generateUniqueCode();
        }
        // jika tidak, maka akan mengembalikan nilai kode yang didapat
        return $code;
    }

    function tambah(Request $request){
        $validated = $request->validate([
            "name" => "required|unique:products",
            "kateg" => "required",
            "jumlah" => "required"
        ]);
        Product::create([
            'kode' => $request->kode,
            'name' => $request->name                                                         ,
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
