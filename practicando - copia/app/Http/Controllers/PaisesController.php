<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paises;
use App\Http\Requests\StorepaisesRequest;
use App\Http\Requests\UpdatepaisesRequest;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pais=Paises::all();
        return $pais;
        //return view('Administrador.Paises.gestion_paises')->with('paises',Paises::all());
        
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
     * @param  \App\Http\Requests\StorepaisesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaisesRequest $request)
    {
        //
        $paises = new Paises();
        //variable instanciada de la clase Producto
        //-> campos de la base de datos = -> name del formulario
        $paises->nombre = $request->nombre;
        $paises->capital = $request->capital;
        $paises->idioma = $request->idioma;
        $paises->poblacion = $request->poblacion;
        $paises->save();

        return redirect()->route('paises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paises  $paises
     * @return \Illuminate\Http\Response
     */
    public function show(paises $paises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paises  $paises
     * @return \Illuminate\Http\Response
     */
    public function edit(paises $paises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaisesRequest  $request
     * @param  \App\Models\paises  $paises
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaisesRequest $request, paises $paises)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paises  $paises
     * @return \Illuminate\Http\Response
     */
    public function destroy(paises $paises)
    {
        //
    }
}
