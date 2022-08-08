<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    /**
     * Get the teachers for the program.
     */
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    /**
     * Get the teachers for the program.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
