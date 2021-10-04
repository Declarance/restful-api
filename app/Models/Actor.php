<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'pivot'
    ];

    public function film()
    {
        return $this->belongsToMany(Film::class, 'films_actors');
    }
}
