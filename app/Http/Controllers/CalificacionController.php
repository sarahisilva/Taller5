<?php

namespace App\Http\Controllers;

use App\Calificacion;
use App\Libro;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function show($id)
    {
        $calificacions=Calificacion::where('id_user', '=', $id)->get();
        foreach($calificacions as $calificacion){
            $calificacion->id_libro= Libro::find($calificacion->id_libro)->titulo;
        }
        
        return view('calificacionindex',compact('calificacions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Calificacion $calificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calificacion $calificacion)
    {
        //
    }
}
