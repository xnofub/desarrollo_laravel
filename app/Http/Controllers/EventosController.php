<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Formatos;
use App\Tiendas;
use App\Eventos;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;



class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventos = Eventos::orderBy('EVN_FECHA')->paginate(10);
        /*foreach ($eventos as $e){
            dd($e->ToFormatos->FTO_NOMBRE);
        }*/
        return view('backend.eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $eventos = array();
        $formatos = Formatos::lists('FTO_NOMBRE', 'FTO_ID');
        $tiendas = Tiendas::lists('TND_NOMBRE', 'TND_ID');
        //$fecha  = date("d/m/Y");
        return view('backend.eventos.agregar', compact('eventos','formatos','tiendas','fecha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
       $fecha = $request->FECHA;
       list($dia, $mes, $año) = explode('/', $fecha);
       $fecha = $año.$mes.$dia;
       
       $evento = new Eventos();
       $evento->EVN_NOMBRE  = $request->EVN_NOMBRE; 
       $evento->EVN_FECHA = $fecha;
       $evento->FTO_ID = $request->FTO_ID; 
       $evento->TND_ID = $request->TND_ID; 
       $evento->save();
       Session::flash('message','Evento '.$request->EVN_NOMBRE.'agregado con exito.');
        return redirect::to('/eventos');
       //dd($evento);
        
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
