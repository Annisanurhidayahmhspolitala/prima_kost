<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    // Menampilkan daftar akun
    public function tampil() {
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $akuns = User::all();
        return view('akun.tampil', compact('akuns'));
    }else{
        return view('akun.tampil');
    }
    }

    // Form tambah akun
    public function tambah() {
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        return view('akun.tambah');
        }else{
        return view('akun.tampil');
    }
    }

    // Menyimpan data akun baru
    public function submit(Request $request) {
        $request->validate([
            'id' => 'required|unique:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'usertype' => 'required|string|in:penghuni,admin',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'usertype' => $request->usertype,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('akun.tampil')->with('success', 'Akun berhasil ditambahkan.');
    }

    // Form edit akun
    public function edit($id) {
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $akun = User::findOrFail($id);
        return view('akun.edit', compact('akun'));
    }else{
        return view('akun.edit');
    }
    }

    // Memperbarui data akun
    public function update(Request $request, $id) {
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $akun = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255' . $akun->id,
            'password' => 'nullable|string|min:8',
        ]);

        $akun->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $akun->password,
        ]);
        return redirect()->route('akun.tampil')->with('success', 'Akun berhasil diperbarui.');
    }else{
        return view('akun.tampil');
    }
    }

    // Menghapus akun
    public function delete($id) {
        $akun = User::findOrFail($id);
        $akun->delete();

        return redirect()->route('akun.tampil')->with('success', 'Akun berhasil dihapus.');
    }
}
