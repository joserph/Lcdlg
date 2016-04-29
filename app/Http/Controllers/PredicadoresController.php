<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Predicador;
use Validator;

class PredicadoresController extends Controller
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
        return view('admin.predicadores.index');
    }

    public function getList()
    {
        $predicadores = Predicador::orderBy('id', 'desc')->get();
        return response()->json(
            $predicadores->toArray()
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.predicadores.form');
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
                'nombre' => 'required|unique:predicadores'
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
                $predicador = new Predicador($request->all());
                //Guardamos
                $predicador->save();
                //Si lo guarda
                if($predicador)
                {
                    return response()->json([
                        'success'   => true,
                        'message'   => 'Predicador ' . $predicador->nombre . ' se agregó con exito!',
                        'predicador'     => $predicador->toArray()
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
        $predicador = Predicador::find($id);
        return response()->json(
            $predicador->toArray()
        );
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
        if(\request::ajax())
        {
            $predicador = Predicador::find($id);
        $predicador->fill($request->all());
        $predicador->save();
        return response()->json([
            'success'   => true,
            'message'   => 'Predicador ' . $predicador->nombre . ' se actualizó con exito!'
        ]);
        }
        
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
