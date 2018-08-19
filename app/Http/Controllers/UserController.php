<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

//    public function _construct()
//    {
//        $this->middleware('Admin');
//
//    }
    public function index()
    {
      $user= User::all();
      return view('auth.index',['users'=>$user]);
    }

    public function assign($id)
    {
        $user = User::Find($id);
        $user->permission=true;
        $user->save();
        return redirect()->to('user')->with('message','Permission Assigned Successfully.');

    }

    public function deny($id)
    {
        $user = User::Find($id);
        $user->permission=false;
        $user->save();
        return redirect()->to('user')->with('message','Permission Assigned Successfully.');

    }
}
