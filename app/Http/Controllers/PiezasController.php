<?php

namespace App\Http\Controllers;

use App\Pieza;
use Illuminate\Http\Request;

class PiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piezas = Pieza::all();
        return view('piezas')->with('piezas',$piezas);
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
        $pieza = new Pieza;
        $pieza->nombre=$request->nombre;
        $pieza->descripcion=$request->descripcion;
        $pieza->numeroPiezas=$request->numeroPiezas;
        $pieza->precio=$request->precio;
        $pieza->save();

        return redirect('/piezas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pieza = Pieza::find($id);
        return view('propiedadesPieza')->with('pieza',$pieza);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pieza $pieza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pieza $pieza)
    {
       
    }

    public function guardaCampos(Request $request)
    {
        $pieza = Pieza::find($request->id);
        
        $pieza->nombre = $request->nombre;
        $pieza->descripcion=$request->descripcion;
        $pieza->numeroPiezas=$request->numeroPiezas;
        $pieza->precio=$request->precio;
        $pieza->save();
    
        return redirect('/piezas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pieza = Pieza::find($id);
        $pieza->delete();
        return redirect('/piezas');
    }
}
