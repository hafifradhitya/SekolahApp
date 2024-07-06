<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examAnswer extends Model
{
    use HasFactory;

    public function examQuestion(){
        return $this->belongsTo(examQuestion::class, "examquestion_id", "id");
    }
}
