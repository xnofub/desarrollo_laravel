<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugadores;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Requests\JugadoresCreateRequest;
use App\Http\Requests\JugadoresUpdateRequest;
use Redirect;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jugadores = Jugadores::paginate(10);
        return view('backend.jugadores.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jugadores.agregar', compact(''));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JugadoresCreateRequest $request)
    {
        //
        $jugador = new Jugadores();
        $jugador->JGD_NOMBRE = $request['JGD_NOMBRE'];
        $jugador->JGD_DCI = $request['JGD_DCI'];
        $jugador->save();
        Session::flash('message','Jugaor agregado con exito.');
        return redirect::to('/jugadores');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugador = Jugadores::find($id);
        return view('backend.jugadores.editar', compact('jugador'));
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JugadoresUpdateRequest $request, $id)
    {
        //
        $jugador = Jugadores::find($id);
        $jugador->JGD_NOMBRE = $request['JGD_NOMBRE'];
        $jugador->JGD_DCI = $request['JGD_DCI'];
        $jugador->save();
        Session::flash('message','Jugador editado con exito.');
        return redirect::to('/jugadores'); 
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
        $jugador = Jugadores::destroy($id);
        Session::flash('message','Jugador Borrado con exito.');
        return redirect::to('/jugadores'); 
        
    }
    
    
    public function getjugadoresbydci(Request $request){
        
        $dci = $request->DCI;
        //$jugadores = Jugadores::where('JGD_DCI', 'like', '%'.$dci.'%')->get();
        $arrayjugadores = array();
        if($dci != ""){
            $jugadores = jugadores::where('JGD_DCI', 'like', '%'.$dci.'%')->get();
            foreach($jugadores as $p){
                        array_push($arrayjugadores, array( 'id' =>$p->JGD_ID,
                            'nombre' => $p->JGD_NOMBRE) );
            }
        }else{
            $jugadores  = jugadores::all()->sortBy('JGD_NOMBRE');
            foreach($jugadores as $p){
                        array_push($arrayjugadores, array( 'id' =>$p->JGD_ID,
                            'nombre' => $p->JGD_NOMBRE) );
            }
        }
        /*
        $jugadores = jugadores::where('reference', 'like', '%'.$nombre.'%')->get();
        foreach($jugadores as $p){
                        array_push($arrayjugadores, array( 'id' =>$p->JGD_ID,'nombre' => $p->JGD_NOMBRE) );
        }*/
        return response()->json($arrayjugadores);
        
    }
}
