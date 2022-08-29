<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newform extends Controller
{
    // public function index(){
    //     $categories = Category::all();
    //     return view('categories.list',['categories'=> $categories]);
    // }
    public function create(){
        return view('categories.new');
    }
}
