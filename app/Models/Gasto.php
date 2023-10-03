<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria');
    }

    public function item()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function pago()
    {
        return $this->hasOne('App\Models\Pago');
    }

    public function etiqueta()
    {
        return $this->belongsToMany('App\Models\Etiqueta');
    }

    public function perfil()
    {
        return $this->hasOne('App\Models\Perfil');
    }
}
