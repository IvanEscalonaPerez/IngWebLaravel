<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Producto extends Model
{
    //
    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Codigo',
        'Precio',
        'Cantidad'
    ];

    public static function validar($datos){
        return Validator::make(
            $datos,
            [
                'Nombre' => 'required|string',
                'Descripcion' => 'string',
                'Cantidad' => 'required|integer',
                'Precio' => 'required|numeric',
                'Codigo' => 'required|string'
               
                
            ]

        );

    }
}
