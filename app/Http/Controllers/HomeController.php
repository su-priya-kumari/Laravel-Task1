<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function homeview(Request $req){
        return view('homepage');
    }
}
