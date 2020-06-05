<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NumerosSorteo extends Model
{

	protected $primaryKey='idSorteo';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idSorteo', 'activo', 'operador','loteria','numero','sorteo','fechaAlta','fechaExp',
    ];

}
