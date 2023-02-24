<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directores';
    use HasFactory;
    
    public function cortos()
    {
        return $this->hasMany(Corto::class);
    }
}