<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'pivot'
    ];

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'films_actors');
    }
}
