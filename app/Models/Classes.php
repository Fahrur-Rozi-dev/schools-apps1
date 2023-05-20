<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';

    public function Student()
    {
        return $this->hasMany(Student::class, 'Class_id', 'id');
    }
}
