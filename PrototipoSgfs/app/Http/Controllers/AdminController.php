<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index(){
        if (Auth::check()){
            if(Auth::user()->role=='admin'){
               return view('Admin.index');
            }
            else{
               return redirect('/');
            }
         }
    }

}
