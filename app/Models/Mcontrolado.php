<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcontrolado extends Model
{
    use HasFactory;
    protected $fillable =['Nombre','Precio_ven','Precio_com','Existencia_min','Existencia_max','Requisitos','id_Laboratorio','id_Presentacion','id_Via_administracion','Imagen'];
    public function laboratorio(){
        return $this -> belongsTo('App\Models\Laboratorio');
    }

    public function presentacion(){
        return $this -> belongsTo('App\Models\Presentacion');
    }

    public function via_administracion(){
        return $this -> belongsTo('App\Models\Via_administracion');
    }
    public function laboratorios(){
        return $this->belongsTo(Laboratorio::class,'id_Laboratorio');
    }
    public function presentacions(){
        return $this->belongsTo(Presentacion::class,'id_Presentacion');
    }
    public function via_administracions(){
        return $this->belongsTo(Via_administracion::class,'id_Via_administracion');
    }
}
