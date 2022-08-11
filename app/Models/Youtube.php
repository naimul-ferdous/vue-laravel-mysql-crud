<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'channel',
        'duration',
        'description',
        'url',
        'program_id'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
