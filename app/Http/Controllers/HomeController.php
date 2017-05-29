<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function home(){
        $message = '';
        if (!view()->exists('home')){
            return view('error', ['message'=>$message]);
        }
        else{
            return view('home');
        }
    }
}
