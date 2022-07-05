<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizza';

    use HasFactory;

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class);
    }
}
