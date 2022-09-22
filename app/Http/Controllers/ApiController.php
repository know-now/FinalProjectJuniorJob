<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class ApiController extends Controller
{
    //
    function list(){
        $quotes=Http::get('https://zenquotes.io/api/random')->json();
    return view('quotes', ['quotes'=>$quotes]);
    }

}
