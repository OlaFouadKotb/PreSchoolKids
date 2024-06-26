<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Coursee;


class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'image',
        'phone', 
        'facebook',
        'twitter', 
        'instagram', 
       
];
// public function course()
//     {
//         return $this->hasOne(Coursee::class);
//     }
}

