<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
      return view('category.index')->with('categories', Category::all());
    }

    function create(){
      return view('category.create');
    }

    function store(Request $request){
      Category::create([
        'name' => $request->name
      ]);
      return redirect( route('category.index') );
    }
}
