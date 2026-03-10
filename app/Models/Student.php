<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'course',
        'student_id',
        'faculty',
        'email',
        'phone',
        'address'
    ];
}
