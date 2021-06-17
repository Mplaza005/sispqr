<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPqrsd extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCliente',
        'idPqrsd',
        'correo',
        'descEstado',
        ];
      protected $table = "user_pqrsd";
}
