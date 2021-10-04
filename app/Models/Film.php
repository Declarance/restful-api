<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'genre_id',
    ];

    protected $hidden = [
        'pivot',
        'genre_id'
    ];

    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class, 'films_actors');
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
}
