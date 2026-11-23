<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['nome', 'slug'])]
class Tipo extends Model
{
    public function eventos():HasMany
    {
        return $this->hasMany(Evento::class);
    }
}
