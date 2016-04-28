<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fecha;
use Validator;


class FechasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('editor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fechas.index');
        
    }

    public function getList()
    {
        $fechas = Fecha::all();
        return response()->json(
            $fechas->toArray()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fechas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(\Request::ajax())
        {
            //Validamos 
            $validator = Validator::make($request->all(), [
                'fecha' => 'required|unique:fechas',
                'tipo'  => 'required'
            ]);
            //Validamos si falla
            if($validator->fails())
            {
                return response()->json([
                    'success'   => false,
                    'errors'    => $validator->getMessageBag()->toArray()
                ]);
            }else{
                //Si todo va bién
                $fecha = new Fecha($request->all());
                //Guardamos
                $fecha->save();
                //Si lo guarda
                if($fecha)
                {
                    return response()->json([
                        'success'   => true,
                        'message'   => 'Fehca agregada con exito!',
                        'fecha'     => $fecha->toArray()
                    ]);
                }
            }
        }
        
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
        $fecha = Fecha::find($id);
        return view('admin.fechas.edit')
            ->with('fecha', $fecha);
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
