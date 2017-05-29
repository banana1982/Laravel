<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //
    public function error (){
        $message = 'Page not available';
        return view('error', ['message'=>$message]);
    }
}
