<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventos;
use App\Http\Requests;
use App\Post;

class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $articulos = array();
        $noticias = array();
        $otros = array();
        
        $post = Post::where('STP_ID','=',1)->orderBy('PST_ID','desc')->paginate(4);
        $eventos = Eventos::orderBy('EVN_ID','desc')->paginate(10);
         foreach ($eventos as $e){
            list($año,$mes,$dia) = explode('-', $e->EVN_FECHA);
            $fecha = $dia.'/'.$mes.'/'.$año;
            $e->EVN_FECHA = $fecha;
        }
        return view('front.index', compact('eventos','post'));
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
}
