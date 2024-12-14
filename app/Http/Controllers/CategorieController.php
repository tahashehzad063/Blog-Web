<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories',compact('categories'));
        
    }
    public function addindex(Request $request){
        $category = new Category();
        $category->name = $request->input('category');
        $category->save();
        return redirect()->back();
    }

}
