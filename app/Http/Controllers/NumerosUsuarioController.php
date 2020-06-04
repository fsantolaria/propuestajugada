<?php

namespace App\Http\Controllers;

use App\NumerosUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NumerosUsuarioController extends Controller
{

    public function altaNumero()
    {
        $id=Auth::user()->id;
        $id_numero=DB::table('numeros_sorteo')->select('id')
        ->first()
        ->whereNotIn($id,function($query,$id) {
            $query->DB::select('select id_sorteo from numeros_usuario where id_usuario = ?', $id);
        });

        NumerosUsuario::create([
            'user_id' => $id,
            'numero_id' => $id_numero,
            'estado' => 1,


        ]);

    }

}
