<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Predica;
use Laracasts\Flash\Flash;
use App\Fecha;
use App\Predicador;

class PredicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $predicas = Predica::with('predicador', 'user')->orderBy('id', 'DESC')->paginate(10);
        $predicas->each(function($predicas)
        {
            $predicas->user;
            $predicas->predicador;
        });
        
        dd($predicas);
        return view('admin.predicas.index')
            ->with('predicas', $predicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meses = Fecha::where('tipo', '=', 'mes')->orderBy('id', 'DESC')->lists('fecha', 'id');
        $anios = Fecha::where('tipo', '=', 'año')->orderBy('id', 'DESC')->lists('fecha', 'id');
        $predicadores = Predicador::orderBy('id', 'DESC')->lists('nombre', 'id');
        return view('admin.predicas.form')
            ->with('meses', $meses)
            ->with('anios', $anios)
            ->with('predicadores', $predicadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $predica = new Predica($request->all());
        $predica->save();
        flash()->success('<i class="fa fa-check fa-fw"></i> La predica <b>' . $predica->title . '</b> se agregó con exito!');
        return redirect()->route('predicas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
