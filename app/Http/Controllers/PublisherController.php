<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function getAllPublishers(){
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'), ['title'=> 'Publisher']);
    }

    public function getPublisherBooks(Request $request){
        $book_list = Publisher::where('id', $request->id)->get();
        return view('publisher-detail', compact('book_list'), ['title'=> 'Publisher Detail']);
    }
}
