<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //
    public function getError ($message){
        return view('error', ['message'=>$message]);
    }
}
