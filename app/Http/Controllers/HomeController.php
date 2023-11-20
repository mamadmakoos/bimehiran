<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{

    public  function main(){
        $categories = Category::where('parent',3)->orderByDesc('id')->limit(4)->get();
        return view('main',["categories" => $categories]);
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
