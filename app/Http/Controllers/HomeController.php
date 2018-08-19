<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//      //  $this->middleware('auth',['except'=>['index']]);
//       // $this->middleware('Admin');
//
//      //  $this->middleware('User',['only' => ['admin']],['except'=>['index']]);
//
//        $this->middleware('Admin', ['except' => ['index']]);
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function About()
    {
        return view('about');
    }
    public function Admin()
    {
        return view('home.admin');

    }
    public function User()
    {
        return view('home.user');

    }

    public function unauthorized()
    {
        return view('unauthorized');

    }
    public function test()
    {
        return view('index');

    }

}
