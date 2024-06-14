<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
public function welcome(){
    return view('welcome');
    //return view('welcome')->with('title','Welcome to my Blog');
}



}
