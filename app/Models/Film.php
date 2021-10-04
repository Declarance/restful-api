<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title'
    ];

    protected $hidden = [
        'pivot'
    ];

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'films_actors');
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'films_genres');
    }
}
