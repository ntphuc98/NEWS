<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    public function new(){
    	return view('admin.login');
    }

    public function create(Request $request){
    	$this->validate($request, [
    		'email' => 'required|min:3|max:100',
    		'password' => 'required|min:3|max:100'
    	],[
    		'email.required' => 'Bạn chưa nhập email!',
    		'email.min' => 'email tối thiểu 3 ký tự!',
    		'email.max' => 'email tối đa 100 ký tự!',
    		'password.required' => 'Bạn chưa nhập password!',
    		'password.min' => 'password tối thiểu 3 ký tự!',
    		'password.max' => 'password tối đa 100 ký tự!',
    	]);
    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    		return redirect()->route('admin.categories.index');
    	} else {
    		return redirect('admin/login')->with('message', 'Login failed!');
    	}
    }
}
