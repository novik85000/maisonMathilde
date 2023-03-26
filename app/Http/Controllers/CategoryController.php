<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function showCategoryList(){
        $category = Category::all();
        return ['category_list'=> $category] ;
    }

}
