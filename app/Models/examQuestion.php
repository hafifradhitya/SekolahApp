<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examQuestion extends Model
{
    use HasFactory;

    public function examAnswer(){
        return $this->hasMany(examAnswer::class, "examquestion_id", "id");
    }
}
