<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
}
