<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'banner_image',
        'about_image',
    ];

    /**
     * Get the teachers for the program.
     */
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    /**
     * Get the events for the program.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }


    /**
     * Get the students for the program.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Get the feedbacks for the program.
     */
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    /**
     * Get the videos for the program.
     */
    public function videos()
    {
        return $this->hasMany(Youtube::class);
    }
}
