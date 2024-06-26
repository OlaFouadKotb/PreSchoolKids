<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coursee extends Model
{
    
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'course_name',
        'teacherName',
        // 'title', 
        'price',
        'age', 
        'time', 
        'capacity',
        'TeacherImage',
         
        
];


  /**
     * The kids that belong to the class.
     */
    /**
     * Relationship: Each course belongs to one teacher.
     */
    // public function teacher()
    // {
    //     return $this->belongsTo(Teacher::class);
    // }

    /**
     * Relationship: Each course can have many kids enrolled.
     */
//     public function kids()
//     {
//         return $this->hasMany(Kid::class);
// }
}