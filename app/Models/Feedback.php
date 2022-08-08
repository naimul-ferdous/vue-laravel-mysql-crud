<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'parents_first_name',
        'parents_last_name',
        'students_first_name',
        'students_last_name',
        'students_grade',
        'contact',
        'email',
        'suggestion',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
