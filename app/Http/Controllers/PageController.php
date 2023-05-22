<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        return view('main');
    }
    public function welcome(){
        return view('welcome', ['arr' => ['Umrzoq',1,23,4,56,7]]);
    }
}
