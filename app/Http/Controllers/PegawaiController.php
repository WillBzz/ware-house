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
    function detailJadi(Request $request, user $users){
        user::where('id', $request->id)->update([
            'name' => $request->nama
        ]);
        return redirect('/data-pegawai');
    }
    function hapusJadi(Request $request, user $user){
        user::where('id', $request->id)->delete();
        return redirect('/data-pegawai')->with('toast_error', 'Akun Pegawai Berhasil Diblokir');
    }
    function deleted(){
        $usersdeleted = user::onlyTrashed()->get();
        return view('akun.pegawaideleted', ['usersdeleted' => $usersdeleted]);
    }
    function restore($product_id){
        $usersdeleted = user::where('id', $product_id)->withTrashed()->first();
        $usersdeleted->restore();
        return redirect('/data-pegawai')->with('toast_success', 'Akun Pegawai Berhasil Dipulihkan');
    }
}
