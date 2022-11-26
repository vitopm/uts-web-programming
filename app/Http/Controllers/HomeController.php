<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{

    public function index(){
        $book = Book::all();
        return view('index', compact('book'));
    }

    public function contact(){
        return view('contact');
    }
}
