<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrsd extends Model
{
    use HasFactory;
    // protected $dates = ['created_at'];

    protected $fillable = [
    
    'correoElectronico',
    'esAnonima',
    'tipoPqrsd',
    'tipoPersona',
    'descripcion',
    
    ];

    protected $guarded = ['idCliente','urlPdf','estado'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
