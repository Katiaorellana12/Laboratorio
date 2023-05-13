<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaccione
 *
 * @property $id
 * @property $institucion_destino
 * @property $numero_de_cuenta
 * @property $monto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transaccione extends Model
{
    
    static $rules = [
		'institucion_destino' => 'required',
		'numero_de_cuenta' => 'required',
		'monto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['institucion_destino','numero_de_cuenta','monto'];



}
