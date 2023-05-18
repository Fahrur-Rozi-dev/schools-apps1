<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Gender',
        'NIS',
        'Class_id',
    ];
    protected $table = 'students';
}
