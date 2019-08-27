<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Calificacion;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros=Libro::all();
        return view('libroindex',compact('libros'));
    }

    public function show(Request $request)
    {
        $autor = $request->get('autores');
        $libros=Libro::where('autores', 'LIKE', "%$autor%")->orderBy('calificacion_promedio', 'desc')->get();
        return view('libroindex',compact('libros'))->with('success',$autor);
    }

    protected function promedio($id,$nuevo)
    {
        $promedio=$nuevo;
        $n=0;
        $calificacions = Calificacion::where('id_libro',$id)->get();
        foreach($calificacions as $calificacion){
            $n=$n+1;
            $promedio= $promedio+$calificacion->calificación;
        }
        return $promedio;
    }


    public function update(Request $request, $id,$user)
    {
        $libro=Libro::find($id);
        $libro->titulo = $libro->titulo;
        $libro->autores = $libro->autores;
        $libro->isbn = $libro->isbn;
        $libro->calificacion_promedio = ($libro->calificacion_promedio+$this->promedio($id,$request->get('calificacion_promedio')))/2;        
        $libro->save();
        $calificacion=new Calificacion();
        $calificacion->id_user=$user;
        $calificacion->id_libro=$id;
        $calificacion->calificación=$request->get('calificacion_promedio');
        $calificacion->save();
        return redirect('libro')->with('success', 'El libro ha sido actualizado exitosamente');
    }

    public function edit($id)
    {
        $libro = Libro::find($id);
        return view('libroedit',compact('libro','id'));
    }

}
