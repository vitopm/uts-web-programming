<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function getBookPublisher(){
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }

    public function getBookCategory(){
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
}
