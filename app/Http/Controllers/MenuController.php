<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Dish;

class MenuController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('index', compact('categories'));
    }

    public function showDishes(Request $request){
        $categoryId = $request->input('category_id');
        $category = Category::findOrFail($categoryId);
        $dishes = Dish::where('category_id', $categoryId)->get();

        return view('dishes', compact('dishes', 'category'));
    }
}
