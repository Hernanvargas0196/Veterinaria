<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $table = "citas";
    public function mascota()
    {
        return $this->belongsTo(Mascotas::class, 'masc_cita');
    }

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cli_cita');
    }



    
}
