<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookControler extends Controller
{
    //
    public function BookDetail(Request $request){
        $detail = Book::where('id', $request->id)->get();
        return view('book-detail', compact('detail'), ['title'=> 'Book Detail']);
    }
}
