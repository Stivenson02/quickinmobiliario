<?php

namespace QuickInmobiliario\Http\Controllers\Auth;

use Illuminate\Http\Request;
use QuickInmobiliario\Http\Controllers\Controller;

class User extends Controller {

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile() {
        return view('auth/user');
    }

    public function edit($param) {
        //Buscar usuario y cargar datos
        //return view('vista', ['user' => $user]);
    }

    public function update() {

    }

}
