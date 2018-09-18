<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontoffice.home');
    }

    /**
     * Show the user account.
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        return view('frontoffice.account');
    }


}
