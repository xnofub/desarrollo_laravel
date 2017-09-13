<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
//use Mail;


class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $post = Post::where('STP_ID','=',1)->where('TPP_ID','=',1)->orderBy('PST_ID','desc')->paginate(10);//ARTICULOS
        $noticias = Post::where('STP_ID','=',1)->where('TPP_ID','=',2)->orderBy('PST_ID','desc')->paginate(10);//ARTICULOS
        $otros = Post::where('STP_ID','=',1)->where('TPP_ID','=',3)->orderBy('PST_ID','desc')->paginate(10);//ARTICULOS
        return view('front.email.send',compact('eventos','noticias','post','otros'));
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
        Mail::send('front.email.email', $request->all(), function ($message) {
            $message->from('francisco.carrasco.maureira@gmail.com', 'Fetchtutor');
            $message->to('xnofub@gmail.com');
        });
        
        Session::flash('message',' Correo enviado correctamente te responderemos a la brevedad.');
        return redirect::to('/contacto');
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
