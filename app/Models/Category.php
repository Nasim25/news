<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_en',
        'category_bn',
    ];

    static public function getCategories()
    {
        return Category::orderBy('id','desc')->get();
    }
}
