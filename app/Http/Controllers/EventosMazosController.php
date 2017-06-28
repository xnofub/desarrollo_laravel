<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventoMazo;
use App\Http\Requests;
use App\Eventos;
use App\Jugadores;
use \App\Mazos;
use App\Lista;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class EventosMazosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
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
        /*
        $evento = Eventos::find(1);
        $jugadores = Jugadores::lists('JGD_NOMBRE','JGD_ID');
        //dd($evento);
        $participantes = EventoMazo::where('EVN_ID', 1)
               ->orderBy('EVM_POSICION', 'desc')
               ->get();
        return view('backend.eventosmazos.agregar', compact('evento','participantes','jugadores'));
         * 
         */
        $evento = Eventos::find(1);
        $jugadores = Jugadores::orderBy('JGD_NOMBRE')->lists('JGD_NOMBRE','JGD_ID');
        return view('backend.eventosmazos.agregar', compact('evento','jugadores'));
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
        //dd($request->all());
        
        $idEvento = $request->EVN_ID;
        $eventomazo = new EventoMazo();
        $eventomazo->EVN_ID = $request->EVN_ID;
        $eventomazo->MAZ_ID = $request->MAZ_ID;
        $eventomazo->JGD_ID  = $request->JGD_ID;
        $eventomazo->EVM_NOMBRE_MAZO = $request->EVM_NOMBRE_MAZO;
        $eventomazo->EVM_POSICION = $request->EVM_POSICION;
        $eventomazo->save();
        
        Session::flash('message','Resultado ingresado');
        return redirect::to('/participantes/'.$idEvento);  
        
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
        $jugadores = Jugadores::orderBy('JGD_NOMBRE')->lists('JGD_NOMBRE','JGD_ID');
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
        return view('backend.eventosmazos.index', compact('evento','participantes','jugadores'));
    }
    
    
    public function createbyget($id)
    {
        $evento = Eventos::find($id);
        $jugadores = Jugadores::orderBy('JGD_NOMBRE')->lists('JGD_NOMBRE','JGD_ID');
        $mazos = Mazos::orderBy('MAZ_NOMBRE', 'desc')->lists('MAZ_NOMBRE','MAZ_ID');
        return view('backend.eventosmazos.agregar', compact('evento','jugadores','mazos'));
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
        $eventomazo = EventoMazo::find($id);
        dd($eventomazo->EVM_NOMBRE_MAZO);
        $idEvento = $eventomazo->ToEventos->EVN_ID;
        $evento = Eventos::find($idEvento);
        
        //dd($eventomazo->ToJugadores->JGD_ID);
        
        $jugadores = Jugadores::orderBy('JGD_NOMBRE')->lists('JGD_NOMBRE','JGD_ID');
        $mazos = Mazos::orderBy('MAZ_NOMBRE', 'desc')->lists('MAZ_NOMBRE','MAZ_ID');
        return view('backend.eventosmazos.editar', compact('eventomazo','evento','jugadores','mazos'));
    }
    
    
    public function editbyget($id)
    {
        //
        $eventomazo = EventoMazo::find($id);
        $idEvento = $eventomazo->EVN_ID;
        $evento = Eventos::find($idEvento);
        //dd($eventomazo->ToJugadores->JGD_ID);
        $jugadores = Jugadores::orderBy('JGD_NOMBRE')->lists('JGD_NOMBRE','JGD_ID');
        $mazos = Mazos::orderBy('MAZ_NOMBRE', 'desc')->lists('MAZ_NOMBRE','MAZ_ID');
        return view('backend.eventosmazos.editar', compact('eventomazo','evento','jugadores','mazos'));
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
        $eventomazo = EventoMazo::find($id);
        $idEvento = $eventomazo->EVN_ID;
        $eventomazo->MAZ_ID = $request->MAZ_ID;
        $eventomazo->JGD_ID  = $request->JGD_ID;
        $eventomazo->EVM_NOMBRE_MAZO = $request->EVM_NOMBRE_MAZO;
        $eventomazo->EVM_POSICION = $request->EVM_POSICION;
        $eventomazo->save();
        Session::flash('message','Resultado actualizado');
        return redirect::to('/participantes/'.$idEvento);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->all());
        $idEvn = $request->EVN_ID;
        $idEvm = $request->EVM_ID;
        
        $e = Lista::where('EVM_ID','=',$idEvm)->get()->count();
        
        if($e = 0){
            $eventomazo = EventoMazo::destroy($idEvm);
            Session::flash('message','Registro eliminado correctamente');
            return redirect::to('/participantes/'.$idEvn);  
        }else{
            return redirect::to('/participantes/'.$idEvn);  
        }
        //
    }
  
}
