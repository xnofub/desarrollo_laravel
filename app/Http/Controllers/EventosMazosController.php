<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventoMazo;
use App\Http\Requests;
use App\Eventos;
use App\Jugadores;

class EventosMazosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        
        $evento = Eventos::find($id);
        $jugadores = Jugadores::lists('JGD_NOMBRE','JGD_ID');
        //dd($evento);
        $participantes = EventoMazo::where('EVN_ID', $id)
               ->orderBy('EVM_POSICION', 'desc')
               ->get();
        //dd($jugadores);
        //foreach($participantes as $p){
            //dd($p->ToMazos->MAZ_NOMBRE);
            //dd($p->ToEventos->EVN_NOMBRE);
        //}
        //dd($evento);
        return view('backend.eventosMazos.index', compact('evento','participantes','jugadores'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
  
}
