<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    public function gasto()
    {
        return $this->belongsToMany('App\Models\Gasto');
    }

    public function ingreso()
    {
        return $this->belongsToMany('App\Models\Ingreso');
    }
}
