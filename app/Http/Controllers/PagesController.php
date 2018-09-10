<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
       
        return view('index1');
    }
    public function book_checkout(){
     
        return view('layouts.booking-checkout');
    }

    public function resume(){

        $this->middleware('auth');
        return view('users.index');
    }

    public function profile(){
        $distance=5;
        return view('users.profile')->with($distance);
    }
    public function gallery(){
        $gallycnt='This is about my slider';
        return view('pages.gallery')->with('gallycnt',$gallycnt);
    }
}
