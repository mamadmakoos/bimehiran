<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function main(){
        return view('main');
    }
    public  function aboutUs(){
        return view('about');
    }
    public  function weblog(){
        return view('weblog');
    }
}
