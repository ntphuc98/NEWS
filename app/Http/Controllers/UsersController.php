<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
    	return view('admin.users.index');
    }

    public function new(){
    	return view('admin.users.new');
    }

    public function show(){
    	return view('admin.users.show');
    }

}
