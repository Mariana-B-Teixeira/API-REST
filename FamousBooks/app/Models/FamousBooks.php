<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamousBooks extends Model
{
    protected $fillable = [
        'title',
        'book_review',
        'author',
        'genre',
        'pages',
        'publication_date'
    ];
}
