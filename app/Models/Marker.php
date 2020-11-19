<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'is_public', 'lat', 'long'
    ];

    protected $casts = [
        'is_public' => 'boolean'
    ];

}
