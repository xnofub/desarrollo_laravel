<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use  App\EventoMazo;
use App\TipoCarta;
use \App\Lista;


class ListaController extends Controller
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
            //LLEGA PETICION POR AJAX
            if($request->ajax()){
                
                //echo $request->CANTIDAD.$request->EVM_ID.$request->NOMBRE. $request->TCR_ID;
                
                $lista = new Lista();
                $lista->LST_CANTIDAD  =  $request->CANTIDAD;
                $lista->EVM_ID = $request->EVM_ID;
                $lista->LST_NOMBRE_CARTA = $request->NOMBRE ;
                $lista->TCR_ID = $request->TCR_ID;
                $lista->save();
                
                $listaCartas = Lista::where('EVM_ID','=',$lista->EVM_ID)->get();
                $arrayCartas  = array();
                foreach($listaCartas as $c){
                        array_push($arrayCartas, array( 
                            'id' =>$c->LST_ID,
                            'nombre' => $c->LST_NOMBRE_CARTA,
                            'tipocarta' => $c->ToTipoCarta->TCR_NOMBRE,
                            'cantidad' => $c->LST_CANTIDAD
                            ) 
                        );
                }          
                return response()->json($arrayCartas);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposcarta = TipoCarta::lists('TCR_NOMBRE','TCR_ID');
        $eventoMazo = EventoMazo::find($id);
        $listaCartas = Lista::where('EVM_ID','=',$id)->get();
        //dd($eventoMazo);
             return view('backend.lista.index', compact('eventoMazo','tiposcarta','listaCartas'));
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
        dd($id);
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
