<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use App\Laboratorio;
use App\Evento;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::join('eventos','eventos.id','=','registros.evento_id')->join('laboratorios','laboratorios.id','=','registros.laboratorio_id')->select('registros.laboratorio_id','registros.evento_id', 'laboratorios.nombre','eventos.nombre as nombreve')->get();
        $laboratorios = Laboratorio::all();
        return view('home',compact('laboratorios','registros'));
    }
}
