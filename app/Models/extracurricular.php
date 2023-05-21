<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class extracurricular extends Model
{
    use HasFactory;
    protected $table = 'extracurriculars';

    public function Students()
    {
        return $this->belongsToMany(Student::class, 'student_extracurricular', 'extracurricular_id', 'student_id');
    }
}
