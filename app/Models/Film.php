<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class, 'films_actors');
    }

    public function genre(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'films_genres');
    }
}
