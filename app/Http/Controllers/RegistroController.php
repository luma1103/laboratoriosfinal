<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use App\Laboratorio;
use App\Evento;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        $laboratorios = Laboratorio::all();
        return view('registros.crearregistro',compact('eventos','laboratorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->input('eve')){
            $registros = $request->input('eve');
            foreach ($registros as $reg => $value) {
                $registro = Registro::create([
                    'evento_id' => $value,
                    'laboratorio_id' => $request->input('labo')
                    ]);
            }
            return redirect('/');
        }
        else
        {
            return redirect('/home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratorio = Laboratorio::where('id',$id)->first();
        $evento = Evento::all();
        $registro = Registro::where('laboratorio_id',$id)->first();
        if(isset($registro))
            return view('registros.editregis',compact('laboratorio','evento','registro'));
        else
            return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->input('reg')){
            $registros = $request->input('reg');
            $regs2 = Registro::where('laboratorio_id',$id)->get();
            $laboratorio = Laboratorio::where('id',$id)->first();
            $regs2 = Registro::where('laboratorio_id',$id)->delete();
            
            foreach ($registros as $reg => $value) {
                $r = Registro::create([
                    'evento_id' => $value,
                    'laboratorio_id' => $laboratorio->id
                    ]);
            }
        }
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg2 = Registro::where('laboratorio_id',$id)->delete();
        $laborotio = Laboratorio::where('id',$id)->delete();
        return redirect('/');
    }
}
