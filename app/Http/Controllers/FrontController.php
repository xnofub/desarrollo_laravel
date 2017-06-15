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
         $articulos = Post::where('STP_ID','=',1)->where('TPP_ID','=',1)->orderBy('PST_ID','desc')->paginate(10);//ARTICULOS
         //$mazos  = Mazos::where('FTO_ID','=',$id)->orderBy('MAZ_NOMBRE','desc')->get();
         //$eventos = Eventos::where('FTO_ID','=',$id)->orderBy('EVN_ID','desc')->paginate(12);
         return view('front.formato.evento', compact('eventos','mazos','articulos'));
     }
     
     public function getListadoById($id){
         
         $mazo = EventoMazo::find($id);
         $idevento = $mazo->EVN_ID;
         $otrosmazos = EventoMazo::where('EVM_ID','!=',$id)->where('EVN_ID','=',$idevento)->orderBy('EVM_POSICION')->get();
         
         
         $listaLands = Lista::where('EVM_ID','=',$id)->where('TCR_ID','=',4)->orderBy('TCR_ID', 'DESC')->get();
         $listaInstSor = Lista::where('EVM_ID','=',$id)->where('TCR_ID','=',1)->orderBy('TCR_ID', 'DESC')->get();
         $listaOther = Lista::where('EVM_ID','=',$id)->where('TCR_ID','=',6)->orderBy('TCR_ID', 'DESC')->get();
         $listaCriat = Lista::where('EVM_ID','=',$id)->where('TCR_ID','=',3)->orderBy('TCR_ID', 'DESC')->get();
         
         
         $listaMain = Lista::where('EVM_ID','=',$id)->where('TCR_ID','!=',8)->orderBy('TCR_ID', 'DESC')->get();
         $listaSb = Lista::where('EVM_ID','=',$id)->where('TCR_ID','=',8)->orderBy('TCR_ID', 'DESC')->get();
         
         $countMain = Lista::where('EVM_ID','=',$id)->where('TCR_ID','!=',8)->sum('LST_CANTIDAD');
         $countSb = Lista::where('EVM_ID','=',$id)->where('TCR_ID','=',8)->sum('LST_CANTIDAD');
         
         //$mazos  = Mazos::where('FTO_ID','=',$id)->orderBy('MAZ_NOMBRE','desc')->get();
         //$eventos = Eventos::where('FTO_ID','=',$id)->orderBy('EVN_ID','desc')->paginate(12);
         return view('front.formato.lista', compact('mazo','listaMain','listaSb','countMain','countSb','otrosmazos','listaLands','listaInstSor','listaOther','listaCriat'));
     }
     
     
     public function getArticuloById($id){
         
         $post = Post::find($id);
         return view('front.formato.articulo', compact('post'));
     }
     
     
}
