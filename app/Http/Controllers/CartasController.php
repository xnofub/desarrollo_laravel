<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartasController extends Controller
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

    
    public function getcartasbyid(Request $request){
        $nombrecarta = $request->nombrecarta;
        //$jugadores = Jugadores::where('JGD_DCI', 'like', '%'.$dci.'%')->get();
        $arraycartas = array();
        if($nombrecarta != ""){
            $jugadores = jugadores::where('JGD_DCI', 'like', '%'.$dci.'%')->get();
            foreach($jugadores as $p){
                        array_push($arraycartas, array( 'id' =>$p->JGD_ID,
                            'nombre' => $p->JGD_NOMBRE) );
            }
        }else{
            
        }
        /*
        $jugadores = jugadores::where('reference', 'like', '%'.$nombre.'%')->get();
        foreach($jugadores as $p){
                        array_push($arrayjugadores, array( 'id' =>$p->JGD_ID,'nombre' => $p->JGD_NOMBRE) );
        }*/
        return response()->json($arraycartas);
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
