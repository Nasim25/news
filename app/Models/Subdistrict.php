<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_id',
        'subdistrict_en',
        'subdistrict_bn',
    ];

     public function district()
    {
        return $this->belongsTo(District::class);
    }
}
