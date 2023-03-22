<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class NavController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function user()
    {
        $user = User::simplePaginate(1);
        return view('user', ['key' => 'user', 'user' => $user]);
    }

    public function search(Request $request)
    {
        $search = $request->cari;
        $user = User::where('name', 'like', "%" . $search . "%")->simplePaginate(1);
        $user->appends($request->all());
        return view('user', ['key' => 'user', 'user' => $user]);
    }

    public function student()
    {
        return view('student', ['key' => 'student']);
    }
}
