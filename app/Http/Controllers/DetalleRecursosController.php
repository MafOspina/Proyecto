<?php

namespace App\Http\Controllers;

use App\Models\DetalleRecurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetalleRecursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallerecursos = DetalleRecurso::all();

        return view('detallerecurso.list') -> with('detallerecursos', $detallerecursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detallerecurso.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate([
            "cantidad" => 'required',
            "tipo_recurso" => 'required',
            "recurso_id" => 'required'
        ]);

        DetalleRecurso::create($request->all());

        return redirect()->route('detallerecursos.index') ->  with('success','Detalle Recurso creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleRecurso  $detallerecurso
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleRecurso $detallerecurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleRecurso  $detallerecurso
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleRecurso $detallerecurso)
    {
        return view('detallerecurso.edit', compact('detallerecurso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleRecurso  $detallerecurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleRecurso $detallerecurso)
    {
        $request->validate([
            "cantidad" => 'required',
            "tipo_recurso" => 'required',
            "recurso_id" => 'required'
        ]);

        $detallerecurso->update($request->all());

        return redirect()->route('detallerecursos.index') ->  with('success','Detalle Recurso editado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleRecurso  $detallerecursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleRecurso $detallerecurso)
    {
        $detallerecurso->delete();

        return redirect()->route('detallerecursos.index') -> with('success', 'Detalle Recurso eliminado con éxito');
    }
}
