<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrsd extends Model
{
    use HasFactory;

    // protected $dates = ['created_at'];

      

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
