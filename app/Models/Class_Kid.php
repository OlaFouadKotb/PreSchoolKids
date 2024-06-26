<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_Kids extends Model
{
    use HasFactory;

    protected $table = 'class_kid'; // Specify the name of the pivot table

    // No need for $fillable since pivot tables typically do not have additional attributes

    // Define the relationships if needed (though typically used indirectly)
    // public function kid()
    // {
    //     return $this->belongsTo(Kid::class, 'kid_id');
    // }

    // public function class()
    // {
    //     return $this->belongsTo(Ciass::class, 'class_id');
    // }
}
