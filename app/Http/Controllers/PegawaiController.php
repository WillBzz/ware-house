<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{   function index()
    {
        $users = user::get();
        return view('akun.datapegawai', compact('users'));
    }
    function hapus(user $user){
        $aksi = 'hapus';
        $target = $user;
        $users = user::get();
        return view('akun.datapegawai', compact(['users', 'aksi', 'target']));
    }
    function hapusJadi(Request $request, user $user){
        user::where('id', $user->id)->delete();
        return redirect('/data-pegawai')->with('toast_info', 'Akun Barang Barhasil Diblokir');
    }
}
