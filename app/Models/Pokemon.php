<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pokemon extends Model
{
    use HasFactory;
    protected $table = 'pokemons';
    protected $fillable = [
        'id',
        'name',
        'base_experience',
        'weight',
        'stat_count',
        'image_url',
    ];

    // Relationship with Ability
    public function abilities()
    {
        return $this->hasMany(Ability::class);
    }
}
