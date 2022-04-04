<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function students (){
        return $this->belongsToMany('App\Models\Student', 'student_class', 'student_id', 'group_id')->withTimestamps();
    }
}
