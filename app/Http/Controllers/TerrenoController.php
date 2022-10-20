<?php

namespace App\Http\Controllers;

use App\Models\Terreno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TerrenoController extends Controller
{
    
    public function index()
    {
        $terrenos = Terreno::all();

        return view('terreno.terrenos') -> with('terrenos', $terrenos);
    }

    public function create()
    {
        return view('terreno.add');
    }

    public function store(Request $r)
    {
        $r -> validate([
            "nomTer" =>  'required|max:45',
            "ciudadTer" => 'required|max:30',
            "descTer" => 'max:500',
            "extensionTer" => 'required',
            "terDispTer" => 'required',
            "tipTer" => 'required'
        ]);

        Terreno::create($r->all());

        return redirect()->route('terrenos.index')->with('success','Terreno creado correctamente');

    }

    public function show($id)
    {
        //
    }

    public function edit(Terreno $terreno)
    {
        return view('terreno.edit', compact('terreno'));
    }

    public function update(Request $r, Terreno $terreno)
    {
        $r -> validate([
            "nomTer" =>  'required|max:45',
            "ciudadTer" => 'required|max:30',
            "descTer" => 'max:500',
            "extensionTer" => 'required',
            "terDispTer" => 'required',
            "tipTer" => 'required'
        ]);

        $terreno->update($r->all());

        return redirect()->route('terrenos.index')->with('success','Terreno actualizado correctamente');
    }

    public function destroy(Terreno $terreno)
    {
        $terreno -> delete();

        return redirect()->route('terrenos.index')->with('success','Terreno eliminado correctamente');
    }
}
