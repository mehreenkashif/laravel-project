<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;

    protected $fillable =[
        'name',
        'class_id',
    ];

    public function studentClass()
{
    return $this->belongsTo(Classes::class, 'class_id');
}
}
