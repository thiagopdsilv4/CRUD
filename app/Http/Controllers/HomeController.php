<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tarefa;

class HomeController extends Controller
{
    public function __invoke(){

       // print_r($list);    
        return view('welcome');
    }
}
