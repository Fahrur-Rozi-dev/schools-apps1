<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function Class()
    {
        return $this->belongsTo(Classes::class, 'Class_id', 'id');
    }
}
