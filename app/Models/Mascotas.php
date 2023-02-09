<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;
    protected $table = "mascotas";
    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cli_masc');
    }
    
}

