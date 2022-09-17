<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    public function laboratorio(){
        return $this -> belongsTo('App\Models\Laboratorio');
    }

    public function presentacion(){
        return $this -> belongsTo('App\Models\Presentacion');
    }

    public function via_administracion(){
        return $this -> belongsTo('App\Models\Via_administracion');
    }
}