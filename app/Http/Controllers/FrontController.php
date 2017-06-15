<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Eventos;
use App\Mazos;
use App\EventoMazo;
use App\Lista;
use App\Post;


class FrontController extends Controller
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
    
     public function getFormato($id){
         $mazos  = Mazos::where('FTO_ID','=',$id)->orderBy('MAZ_NOMBRE','desc')->get();
         $eventos = Eventos::where('FTO_ID','=',$id)->orderBy('EVN_ID','desc')->paginate(12);
         return view('front.formato.formato', compact('eventos','mazos'));
     }
     
     
     public function getFormatoMazos($id){
         $mazos = EventoMazo::where('EVN_ID','=',$id)->orderBy('EVM_POSICION')->get();
         $primerMazo = array();
         
         //$mazos  = Mazos::where('FTO_ID','=',$id)->orderBy('MAZ_NOMBRE','desc')->get();
         //$eventos = Eventos::where('FTO_ID','=',$id)->orderBy('EVN_ID','desc')->paginate(12);
         return view('front.formato.evento', compact('eventos','mazos'));
     }
     
     public function getListadoById($id){
         
         $mazo = EventoMazo::find($id);
         $listaMain = Lista::where('EVM_ID','=',$id)->where('TCR_ID','!=',8)->orderBy('TCR_ID', 'DESC')->get();
         $listaSb = Lista::where('EVM_ID','=',$id)->where('TCR_ID','=',8)->orderBy('TCR_ID', 'DESC')->get();
         
         $countMain = Lista::where('EVM_ID','=',$id)->where('TCR_ID','!=',8)->sum('LST_CANTIDAD');
         $countSb = Lista::where('EVM_ID','=',$id)->where('TCR_ID','=',8)->sum('LST_CANTIDAD');
         
         //$mazos  = Mazos::where('FTO_ID','=',$id)->orderBy('MAZ_NOMBRE','desc')->get();
         //$eventos = Eventos::where('FTO_ID','=',$id)->orderBy('EVN_ID','desc')->paginate(12);
         return view('front.formato.lista', compact('mazo','listaMain','listaSb','countMain','countSb'));
     }
     
     
     public function getArticuloById($id){
         
         $post = Post::find($id);
         return view('front.formato.articulo', compact('post'));
     }
     
     
}
