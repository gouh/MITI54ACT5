<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingrediente';

    use HasFactory;

    public function ingredientes()
    {
        return $this->belongsToMany(Pizza::class);
    }
}
