<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function user()
    {
        return view('user', ['key' => 'user']);
    }
}
