<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalController extends Controller
{
    //
    public function __invoke(){
     
       return view('begin.main');
       
       }
}
