<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('layout.login');
    }

    public function login_proses(Request $request){
        $request ->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'name' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('layout.homepage');
        }else{
            return redirect()->route('login');
        }
    }
}