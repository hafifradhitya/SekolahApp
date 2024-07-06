<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nuptk',
        'degree',
        'teach',
    ];

    public function teacherAttendance(){
        return $this->hasMany(teacherAttendance::class, "teacher_id", "id");
    }

}
