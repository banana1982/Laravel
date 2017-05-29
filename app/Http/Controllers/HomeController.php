<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome(){
        $message = '';
        if (!view()->exists('home')){
            return view('error');
        }
        else{
            return view('home');
        }
    }
}
