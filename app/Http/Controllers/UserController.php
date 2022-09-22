<?php

namespace App\Http\Controllers;


class UserController extends Controller
{

    public function showLoginForm() {
        return view('loginForm');
    }
}
