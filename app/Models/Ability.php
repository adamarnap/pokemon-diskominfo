<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ability extends Model
{
    use HasFactory;
    protected $table = 'abilities';
    protected $fillable = [
        'id',
        'pokemon_id',
        'name',
    ];


    // Relationship with Pokemon
    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
}
