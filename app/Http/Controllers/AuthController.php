<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function dashboard() {
        if(Auth::check() === true) return view('admin/dashboard'); 

        else return redirect(url('admin/login'));
    }

    public function login() {
        return view('admin/login');
    }

    public function validation (Request $request) {
        //var_dump($request->all());
        $credentials = $request->only('email', 'password');
        

        //New user
        /*$credentials = [
            'name' => 'Pedro Vinícius Pereira Dias',
            'email' => 'pedro@gmail.com',
            'password' => Hash::make('123')
        ];
        DB::table('users')->insert([
            $credentials,
        ]);*/
        var_dump(Auth::attempt($credentials));
    }
}
