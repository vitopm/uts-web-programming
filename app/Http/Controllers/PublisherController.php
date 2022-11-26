<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function getAllPublishers(){
        $publishers = Publisher::all();
        
        return view('publisher', compact('publishers'));
    }
}
