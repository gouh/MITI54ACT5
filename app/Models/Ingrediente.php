<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingrediente extends Model
{
    protected $primaryKey = 'ingrediente_id';
    protected $table = 'ingrediente';

    use HasFactory;

    public function ingredientes(): BelongsToMany
    {
        return $this->belongsToMany(Pizza::class, 'pizza_ingrediente', 'fk_ingrediente', 'fk_pizza');
    }
}
