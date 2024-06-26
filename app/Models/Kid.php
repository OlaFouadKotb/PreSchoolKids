<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Coursee;

class Kid extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'birthday',
        'age',
        'class_id',
        'guardian_id',
        'active',
        'image',
    ];

    /**
     * The classes that the kid belongs to.
     */
    // public function courses()
    // {
    //     return $this->hasMany(Coursee::class);
    // }
}