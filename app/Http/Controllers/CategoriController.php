<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;

class CategoriController extends Controller
{
    
    function __construct(){
        $this->middleware('auth');
    }

    function show(){
        $list = Categori::all();
        return view('category/list',['categories' =>$list]);
    }

}
