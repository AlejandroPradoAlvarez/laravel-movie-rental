<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    




    public function __construct() {
        $this->middleware('auth');
    }

    




    public function index() {
    	if(is_null(Auth::user())) {
    		return view('auth.login');
    	} else {
    		return view('home');
    	}
    }
}
