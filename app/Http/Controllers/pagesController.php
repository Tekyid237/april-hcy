<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{

    /**
     * Display the static page home.
     *
     * @return \Illuminate\Http\Response
     */
    public function home() {
    	return view('frontoffice.home');
    }

    /**
     * Display the static page about.
     *
     * @return \Illuminate\Http\Response
     */
    public function about() {
    	return view('frontoffice.about');
    }

    /**
     * Display the static page cgu-april.
     *
     * @return \Illuminate\Http\Response
     */
    public function cgu() {
    	return view('frontoffice.cgu-april');
    }

    /**
     * Display the static page faq.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq() {
    	return view('frontoffice.faq');
    }

    /**
     * Display the static page contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact() {
    	return view('frontoffice.contact');
    }
}
