<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TokenAuthController extends Controller
{

public function signup(Request $request)
    {
        // validación de los datos del formulario
        $this->validate($request, [
            'name'                 => 'required|string|min:3|max:15',
            'email'                => 'required|email|max:255|unique:users',
            'password'             => 'required|min:4|max:60|confirmed',
            'timezone'             => 'max:50',
            'g-recaptcha-response' => 'required|captcha',
        ], $messages = []);

    }
}
