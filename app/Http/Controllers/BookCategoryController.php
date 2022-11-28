<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    public function GetBookByCategory(Request $request){
        $book_list = Category::where('id', $request->id)->get();
        return view('category', compact('book_list'), ['title'=> 'Category']);
    }
}
