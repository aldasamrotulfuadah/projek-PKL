<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $data = array(
            'title'  => 'Data User',
            'menuAdminUser'  => 'active',
            'user'  => User::get();
        );
        return view('admin/user', $data);
    }
}
