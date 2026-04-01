<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user(){
        $data = array(
            'title'             => 'Data User',
            'menuAdminUser'     => 'active',
            'user'              => User::orderBy('Jabatan','asc')->get(),
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
        $user->is_tugas  = false;
        $user->save();

        return redirect()->route('user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $data = array(
            'title'             => 'Edit Data User',
            'menuAdminUser'     => 'active',
            'user'              => User::findOrFail($id),
        );
        return view('admin/edit', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama'      => 'required',
            'email'     => 'required|unique:users,email'.$id,
            'Jabatan'   => 'required',
            'password'  => 'nullable|confirmed|min:8',
        ],[
            'nama.required'         => 'Nama Tidak Boleh Kosong',
            'email.required'        => 'Email Tidak Boleh Kosong',
            'email.unique'          => 'Email Sudah Ada',
            'Jabatan.required'      => 'Jabatan Harus Dipilih',
            'password.confirmed'    => 'Password Konfirmasi Tidak Sama',
            'password.min'          => 'Password Minimal 8 Karakter',
        ]);

        // $user = new User;
        // $user->nama  = $request->nama;
        // $user->email  = $request->email;
        // $user->Jabatan  = $request->Jabatan;
        // $user->password  = Hash::make($request->password);
        // $user->is_tugas  = false;
        // $user->save();

        // return redirect()->route('user')->with('success', 'Data Berhasil Ditambahkan');
    }
}
