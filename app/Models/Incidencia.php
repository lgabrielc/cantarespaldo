<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;
    public $table = 'incidencias';
    protected $fillable = [
        'descripcion',
        'fecha',
        'tipoincidencia_id',
        'cliente_id',
        'estado_id',
    ];
    //Relacion similar a antena y tipodeantena //CORRECTO !!
    public function tipoincidencia()
    {
        return $this->belongsTo('App\Models\Tipoincidencia', 'tipoincidencia_id', 'id');
    }
    //Relacion similar a cliente //CORRECTO !!
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
    public function estado()
    {
        return $this->belongsTo('App\Models\Estado', 'estado_id', 'id');
    }
}
