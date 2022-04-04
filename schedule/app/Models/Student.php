<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //que campos pueden ser llenados y que campos van a ser administrados por el modelo a la base de datos
    
    protected $fillable= ['first_name', 'last_name'];

    public function groups (){
        return $this->belongsToMany('App\Models\Group', 'student_class', 'student_id', 'group_id')->withTimestamps();
    }

    
}
