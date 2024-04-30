<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class Therme extends Controller
{
    public function index(){
        $Theme = Theme::all();

       // return view('dashboard',['Data'=>'mehdi']);
       //return view('welcome',['Theme'=>$Theme]);
    //    return view('dashboard',[
    //     'Data'=>'mehdi',
    //     'type'=>'expresion'
    //    ]);
    }
}
