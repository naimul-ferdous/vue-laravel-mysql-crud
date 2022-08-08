<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'photo',
        'email',
        'phone',
        'description',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
