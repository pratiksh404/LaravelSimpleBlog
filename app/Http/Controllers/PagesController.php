<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function index(){
         $title = "Welcome to laravel";
        return view('pages.index',compact('title'));
    }
    public function about(){
        $title = "Welcome to About page";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        return view('pages.services');
    }
}
