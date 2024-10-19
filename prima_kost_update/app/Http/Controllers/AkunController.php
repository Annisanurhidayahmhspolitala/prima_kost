<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    function tampil() {
        $akuns = User::get();
        return view('akun.tampil', compact('akuns'));
    }

    function tambah() {
        return view('akun.tambah');
    }

    function submit(Request $request) {
        $akuns = new User();
        $akuns->id_akun = $request->id_akun;
        $akuns->nama = $request->nama;
        $akuns->email = $request->email;
        $akuns->username = $request->username;
        $akuns->password = $request->password;
        $akuns->level = $request->level;
        $akuns->save();

        return redirect()->route('akun.tampil');
    }

    function edit($id_akun) {
        $akuns = User::find($id_akun);
        return view('akun.edit', compact('akuns'));
    }

    function update(Request $request, $id_akun) {
        $akuns = User::find($id_akun);
        $akuns->nama = $request->nama;
        $akuns->email = $request->email;
        $akuns->username = $request->username;
        $akuns->password = $request->password;
        $akuns->level = $request->level;
        $akuns->update();

        return redirect()->route('akun.tampil');
    }

    function delete($id_akun) {
        $akuns = User::find($id_akun);
        $akuns->delete();
        return redirect()->route('akun.tampil');
    }
}
