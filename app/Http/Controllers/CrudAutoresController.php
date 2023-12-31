<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudAutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('autores');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularios.autores.formulario-alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        return view('formularios.autores.formulario-editar');
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
    public function destroy()
    {
        return view('formularios.autores.formulario-baja');
    }
}
