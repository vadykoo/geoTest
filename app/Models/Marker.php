<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Marker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'is_public', 'lat', 'long'
    ];

    protected $casts = [
        'is_public' => 'boolean'
    ];

    /**
     * Scope a query to only include public markers.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublic($query)
    {
        return $this->where('is_public', true);
    }
}
