<?php

namespace App\Http\Controllers;

use App\Models\DetalleRecurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Evento;
use App\Models\Recurso;

if (isset($_COOKIE['rol'])) {
    session_start();
    session(['rol' => $_COOKIE['rol']]);
}

class DetalleRecursosController extends Controller
{
    public function index()
    {
    
    }

    public function create()
    {
        return view('detallerecurso.form');
    }

    public function store(Request $request)
    {
           $request->validate([
            "cantidad" => 'required',
        ]);

        DetalleRecurso::create([
            'evento_id' => $request -> evento,
            'recurso_id' => $request -> recurso,
            'cantidad' => $request -> cantidad
        ]);

        return redirect()->route('detallerecursos.show',$request -> evento) ->  with('success','Detalle Recurso creado con éxito');
    }

    public function show($id)
    {
        $detallerecursos = DetalleRecurso::where('evento_id','=',$id)->get();
        $id = Evento::find($id);
        $recursos = Recurso::all();

        // Consultas por tipo
        $herramienta = DetalleRecurso::where('evento_id','=',$id)->join('recursos','detalle_recursos.recurso_id','=','recursos.id')->where('tipRec','=',0)->get();
        $insumo = DetalleRecurso::where('evento_id','=',$id)->join('recursos','detalle_recursos.recurso_id','=','recursos.id')->where('tipRec','=',1)->get();
        $infra = DetalleRecurso::where('evento_id','=',$id)->join('recursos','detalle_recursos.recurso_id','=','recursos.id')->where('tipRec','=',2)->get();
        $tecnologia = DetalleRecurso::where('evento_id','=',$id)->join('recursos','detalle_recursos.recurso_id','=','recursos.id')->where('tipRec','=',3)->get();

        return view('detallerecurso.list')->with('evento', $id)-> with('detallerecursos', $detallerecursos)->
                with('recursos',$recursos)->with('herramienta',$herramienta)->with('insumo',$insumo)->with('infra', $infra)->with('tec',$tecnologia);
    }

    public function edit(DetalleRecurso $detallerecurso)
    {
        return view('detallerecurso.edit', compact('detallerecurso'));
    }

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

    public function destroy(DetalleRecurso $detallerecurso)
    {
        $detallerecurso->delete();

        return redirect()->route('detallerecursos.index') -> with('success', 'Detalle Recurso eliminado con éxito');
    }
}
