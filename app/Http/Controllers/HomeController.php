<?php

namespace App\Http\Controllers;

use App\NumerosSorteo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\PlanUsuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=Auth::user()->id;
        $condicion=DB::table('plan_usuarios')->where('user_id', $id)->exists();
        if ($condicion) {
            //$plan=PlanUsuario::all();
            $plan=DB::table('plans')
            ->join('plan_usuarios','plans.id','=','plan_usuarios.plan_id')
            ->select('plans.nombre')
            ->where('plan_usuarios.user_id',$id)
            ->get();

            $numeros=DB::table('numeros_sorteos')
            ->join('numeros_usuarios','numeros_sorteos.id','=','numeros_usuarios.numero_id')
            ->select('numeros_sorteos.numero')
            ->where('numeros_usuarios.user_id',$id)
            ->get();

           return view('home', compact('plan','numeros'));
        }
        else{
            return view('subscriptionPlan');
        }
    }
}
