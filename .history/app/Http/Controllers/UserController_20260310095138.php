<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $data = array(
            'title'  => 'Data User',
            'menuAdminUser'  => 'active',
            'user'  => 'active',
        );
        return view('admin/user', $data);
    }
}
