<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Adapter\CanOverwriteFiles;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_en',
        'subcategory_bn',
    ];

    public static function getCubcategory()
    {
        return Subcategory::get();
    }

    public static function subcategoryValidation($request)
    {
        return $request->validate([
            'category_id' => 'required',
            'subcategory_en' => 'required',
            'subcategory_bn' => 'required',
        ]);
    }
   
}
