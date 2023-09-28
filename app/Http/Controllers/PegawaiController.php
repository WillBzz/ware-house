<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    function index()
    {
        $users = user::get();
        return view('akun.datapegawai', compact('users'));
    }
    function create(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect('/data-pegawai')
                        ->withErrors($validator)
                        ->withInput();
        }
        user::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return back();
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
