<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacherAttendance extends Model
{
    use HasFactory;

    public function teachers(){
        return $this->belongsTo(Teacher::class, "teacher_id", "id");
    }
}
