<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guardian extends Model
{
    use HasFactory;
    protected $fillable = [
        'guardianName',
        'relationOfKid',
        'phone', 
        'email',
        'appointment', 
        
];
// public function guardian()
//     {

//         return $this->hasMany(Kid::class);
//     }

}
