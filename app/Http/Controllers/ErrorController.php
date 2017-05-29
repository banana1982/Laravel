<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class ErrorController extends Controller
{
    //
    public function error (){

        return view('error', 'msg');
    }
}
