<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Faker\Extension\CountryExtension;
use Illuminate\Http\Request;

class DiazController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Programa::all();
        //return  $course;
        return view('programa.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('programa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();
        $course = new Programa();
        $course-> nombre = $request->input('nombre');
        $course-> descripcion = $request->input('descripcion');
        $course-> sistemaop = $request->input('sistemaop');
        $course-> version = $request->input('version');

        $course->save();
        return 'Guardado Correctamente';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
