<?php

namespace App\Models;

use App\Models\Student;
use App\Models\teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = [
        'Name',
        'Teacher_id',
    ];

    public function Student()
    {
        return $this->hasMany(Student::class, 'Class_id', 'id');
        
    }

    public function Teachers()
    {
        return $this->belongsTo(teacher::class, 'Teacher_id', 'id');
        
    }
}
