<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurclienController extends Controller
{
    public function index(){
        return view('Pages.ourclient');
    }
}
