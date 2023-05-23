<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';



public function Class()
{
    return $this->hasMany(Classes::class, 'Teacher_id', 'id');
}
}
