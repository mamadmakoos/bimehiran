<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    public  function post(){
        return view('single');
    }
}
