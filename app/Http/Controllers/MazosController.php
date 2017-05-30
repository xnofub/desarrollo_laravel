<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mazos;
use App\Formatos;
use Redirect;
use App\Http\Requests\MazosCreateRequest;
use App\Http\Requests\MazosUpdateRequest;
use Illuminate\Support\Facades\Session;



class MazosController extends Controller
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
        $mazos = Mazos::paginate(10);
        return view('backend.mazos.index', compact('mazos'));
    }
    
    public function backendIndex(){
        $mazos = Mazos::paginate(10);
        return view('backend.mazos.index', compact('mazos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $mazos = Mazos::paginate(10);
        $formatos = Formatos::lists('FTO_NOMBRE', 'FTO_ID');
        return view('backend.mazos.agregar', compact('mazos','formatos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MazosCreateRequest $request)
    {
            $newMazo = new Mazos();
            $newMazo->MAZ_NOMBRE = $request['MAZ_NOMBRE'];
            $newMazo->FTO_ID = $request['FTO_ID'];
            $error = '';
            try {
                $newMazo->save();
                $error = false;
            } catch (Exception $ex) {
                $error = true;
                return $ex;
            }
            Session::flash('message','Mazo agregado con exito.');
            return redirect::to('/mazos');  
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
        //s
        $mazo = Mazos::find($id);
        $formatos = Formatos::lists('FTO_NOMBRE', 'FTO_ID');
        return view('backend.mazos.editar', compact('mazo','formatos'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MazosUpdateRequest $request, $id)
    {
        $mazo = Mazos::find($id);
        $mazo->MAZ_NOMBRE = $request['MAZ_NOMBRE'];
        $mazo->FTO_ID = $request['FTO_ID'];
        $mazo->save();
        return redirect::to('/mazos');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
