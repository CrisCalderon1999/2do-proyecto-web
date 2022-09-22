<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    use HasFactory;
    public function medicamentos(){
        return $this->hasMany('App\Models\Medicamento');
    }
    public function medicamentosres(){
        return $this->hasMany('App\Models\Mcontrolado');
    }
}
