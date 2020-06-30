<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function index(){
    	return view('admin.news.index');
    }

    public function new(){
    	return view('admin.news.new');
    }

    public function show(){
    	return view('admin.news.show');
    }
}
