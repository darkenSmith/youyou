<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {

        $request->validate([
            'email' => [
                'string',
                'required',
                'max:256'
            ],
            'password' => [
                'string',
                'required',
            ]

        ]);

    }

    public function register()
    {

    }
}
