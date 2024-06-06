<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Carro::all();
      // return  $course;
        return view('carros.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //aqui podememos ver una pequeña vista de los datos que ingresemos
      // return $request->all();
        $course = new Carro();
        $course-> recidencia = $request->input('recidencia');
        $course-> marca = $request->input('marca');
        $course-> modelo = $request->input('modelo');
        $course-> precio = $request->input('precio');
        $course-> descripcion = $request->input('descripcion');

        if($request->hasFile('imagen')){
            $course->imagen = $request->file('imagen')->store('public/carro');
        }
        $course->save();
        return 'Guardado exitosamente';

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carros = Carro::find($id);
        return view('Carros.show', compact('carros'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carros = Carro::find($id);
        return view('carros.edit',compact('carros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Carro::find($id);
        $course->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
        $course->imagen = $request->file('imagen')-> store('public/cursos');
        }
        $course->save();
        return 'Actulizacion Exitosa';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
