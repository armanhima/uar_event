<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function dataUser() {
        $user = User::get();
        return view('admin.dataUser',compact('user'));
    }
}
