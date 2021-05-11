<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
    'primerNombre',
    'segundoNombre',
    'primerApellido',
    'segundoApellido',
    'tipoDocumento',
    'numeroIdentificacion',
    'fechaNacimiento',
    'genero',
    'direccion',
    ];

     protected $guarded = ['es_anonima'];


    public function pqrsds()
    {
        return $this->hasMany(Pqrsd::class);
    }
}
