<?php

namespace App\Models;

// use illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //


    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'teknologi',
        'image',
        'status',
    ];
}
