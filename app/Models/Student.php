<?php

namespace App\Models;

use App\Models\Classes;
use App\Models\extracurricular;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'Name',
        'Gender',
        'NIS',
        'Class_id',
    ];
    protected $table = 'students';

    public function Class()
    {
        return $this->belongsTo(Classes::class, 'Class_id', 'id');
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }
}
