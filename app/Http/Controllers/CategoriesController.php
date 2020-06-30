<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('admin.categories.index', ['categories' => $categories]);
    }

    public function new(){
    	return view('admin.categories.new');
    }

     public function create(Request $request){

    	$this->validate($request, [
    		'name' => 'required|min:3|max:100',
    		'link' => 'required|min:3|max:100'
    	],[
    		'name.required' => 'Bạn chưa nhập tên!',
    		'name.min' => 'Tên tối thiểu 3 ký tự!',
    		'name.max' => 'Tên tối đa 100 ký tự!',
    		'link.required' => 'Bạn chưa nhập link!',
    		'link.min' => 'Link tối thiểu 3 ký tự!',
    		'link.max' => 'Link tối đa 100 ký tự!',
    	]);
    	$category = new Category();
    	$category->name = $request->name;
    	$category->link = $request->link;
    	$category->save();

    	return redirect()->route('admin.categories.new')->with('message', 'Them thanh cong!');
    }

    public function show($id){
    	$category = Category::find($id);
    	return view('admin.categories.show', ['category' => $category]);
    }

    public function update(Request $request, $id){
    	$category = Category::find($id);
    	$this->validate($request, [
    		'name' => 'required|min:3|max:100',
    		'link' => 'required|min:3|max:100'
    	],[
    		'name.required' => 'Bạn chưa nhập tên!',
    		'name.min' => 'Tên tối thiểu 3 ký tự!',
    		'name.max' => 'Tên tối đa 100 ký tự!',
    		'link.required' => 'Bạn chưa nhập link!',
    		'link.min' => 'Link tối thiểu 3 ký tự!',
    		'link.max' => 'Link tối đa 100 ký tự!',
    	]);
    	$category->name = $request->name;
    	$category->link = $request->link;
    	$category->update();
    	return redirect()->route('admin.categories.show', ['id' => $category->id])->with('message', 'Update successfuly!');
    }

    public function delete($id){
    	$category = Category::find($id);
    	$category->delete();
    	return redirect()->route('admin.categories.index')->with('message', 'Delete successfuly!');
    }
}
