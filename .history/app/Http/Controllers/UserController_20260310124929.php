<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $data = array(
            'title'             => 'Data User',
            'menuAdminUser'     => 'active',
            'user'              => User::get(),
        );
        return view('admin/user', $data);
    }
    public function create(){
        $data = array(
            'title'             => 'Tambah Data User',
            'menuAdminUser'     => 'active',
        );
        return view('admin/create', $data);
    }

    public function store(Request $request){
        $request->validate([
            'nama'      => 'required',
            'email'     => 'required|unique:users,email',
            'Jabatan'   => 'required',
            'password'  => 'required|confirmed|min:8',
        ],[
            'nama.required'         => 'Nama Tidak Boleh Kosong',
            'email.required'        => 'Email Tidak Boleh Kosong',
            'email.unique'          => 'Email Sudah Ada',
            'Jabatan.required'      => 'Jabatan Harus Dipilih',
            'password.required'     => 'Password Tidak Boleh Kosong',
            'password.confirmed'    => 'Password Konfirmasi Tidak Sama',
            'password.min'          => 'Password Minimal 8 Karakter',
        ]);

        $user = new User;
        $user->nama  = $request->nama;
        $user->email  = $request->email;
        $user->Jabatan  = $request->Jabatan;
        $user->password  = Hash::make($request->password);
        $user->password  = Hash::make($request->password);
        $user->save();
    }
}
