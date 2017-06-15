<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TipoPost;
use App\Post;
use Illuminate\Support\Facades\Session;
use Redirect;
use App\EstadoPost;

class PostController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $post = Post::all();

        return view('backend.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipopost = TipoPost::lists('TPP_NOMBRE','TPP_ID');
        $estados = EstadoPost::lists('STP_NOMBRE','STP_ID');
        
        
        return view('backend.post.agregar', compact('tipopost','estados'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(date("Y-m-d H:m:s"));
        
        $post = new Post();
        $post->PST_TITULO = $request->TITULO;
        $post->PST_FECHA = date("Y-m-d H:m:s");
        $post->PST_DESCRIPCION = $request->PST_DESCRIPCION;
        $post->PST_TEXTO = $request->editor1;
        $post->STP_ID = $request->STP_ID;
        $post->TPP_ID = $request->TPP_ID;
        $post->save();
        
        
        Session::flash('message','Articulo registrado con exito.');
        return redirect::to('/post');       
        
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
        $tipopost = TipoPost::lists('TPP_NOMBRE','TPP_ID');
        $post = Post::find($id);
        $estados = EstadoPost::lists('STP_NOMBRE','STP_ID');
        return view('backend.post.editar', compact('post','tipopost','estados'));
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
        $post = Post::find($id);
        $post->PST_TITULO = $request->TITULO;
        $post->PST_FECHA = date("Y-m-d H:m:s");
        $post->PST_DESCRIPCION = $request->PST_DESCRIPCION;
        $post->PST_TEXTO = $request->editor1;
        $post->STP_ID = $request->STP_ID;
        $post->TPP_ID = $request->TPP_ID;
        $post->save();
        
        Session::flash('message','Articulo editado con exito.');
        return redirect::to('/post');  
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
