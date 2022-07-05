<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pizza extends Model
{
    protected $primaryKey = 'pizza_id';
    protected $table = 'pizza';

    use HasFactory;

    public function ingredientes(): BelongsToMany
    {
        return $this->belongsToMany(Ingrediente::class, 'pizza_ingrediente', 'fk_pizza', 'fk_ingrediente');
    }
}
