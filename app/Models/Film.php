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

    public function actors()
    {
        return $this->hasMany(Actor::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
