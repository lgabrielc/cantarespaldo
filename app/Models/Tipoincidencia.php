<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoincidencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'estado_id',
    ];
    public $table = 'tipoincidencias';
    public function incidencias()
    {
        return $this->hasMany('App\Models\Incidencia');
    }
    public function estado()
    {
        return $this->belongsTo('App\Models\Estado', 'estado_id', 'id');
    }
}
