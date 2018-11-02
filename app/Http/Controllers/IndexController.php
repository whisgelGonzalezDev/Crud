<?php

namespace ClubNautico\Http\Controllers;

use ClubNautico\index;
use ClubNautico\Http\Requests\pruebaRequest;
// use Illuminate\Foundation\Validation\ValidatesRequests;﻿
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var = index::orderBy('id','ASC')->paginate(4);
        return view('index', compact('var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $request->all();
                
        $reglas = array(
            'inputAmarre'      => 'required', 
            'inputEmbarcacion' => 'required', 
            'inputEmpleados'   => 'required', 
            'inputPertenece'   => 'required', 
            'inputPropietario' => 'required',
            'inputSocio'       => 'required',
            'inputZona'        => 'required',
        );
        $mensajes = [
            
            'inputAmarre.required' =>  'Ingresar Amarre es obligatorio',
            'inputEmbarcacion.required' =>  'Ingresar la Embarcacion es obligatorio',
            'inputEmpleados.required' =>  'el empleado es un campo obligatorio',
            'inputPertenece.required' =>  'identificar a quien pertenece es obligatorio',
            'inputPropietario.required' =>  'Identificar al Propietario es obligatorio',
            'inputSocio.required' =>  'El Socio es obligatorio',
            'inputZona.required' =>  'Debe identificar la Zona',
               ];
        $validacion = Validator::make($data, $reglas, $mensajes);

        if ($validacion->fails()) {
            $errores = $validacion->errors();
            return view('form')->with('errores', $errores)
                               ->with('data', $data);
        }

        
        $nvform  = new index;

        $nvform->Amarre       =    $data['inputAmarre'];
        $nvform->Embarcacion  =    $data['inputEmbarcacion'];
        $nvform->Empleados    =    $data['inputEmpleados'];
        $nvform->Pertenece    =    $data['inputPertenece'];
        $nvform->Propietario  =    $data['inputPropietario'];
        $nvform->Socio        =    $data['inputSocio'];
        $nvform->Zonas        =    $data['inputZona'];
       
        $nvform->save();
      
        
        // index::create($data);
        Session::flash('message', 'Registro creado exitosamente');  
        return view('form')->with('data', $data);
        //




        
    }

    /**
     * Display the specified resource.
     *
     * @param  \ClubNautico\index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(index $index)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ClubNautico\index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(index $index)
    {
        return view('editar', compact('index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ClubNautico\index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, index $index)
    {
        $data =  $request->all();
                
        $reglas = array(
            'inputAmarre'      => 'required', 
            'inputEmbarcacion' => 'required', 
            'inputEmpleados'   => 'required', 
            'inputPertenece'   => 'required', 
            'inputPropietario' => 'required',
            'inputSocio'       => 'required',
            'inputZona'        => 'required',
        );
        $mensajes = [
            
            'inputAmarre.required' =>  'Ingresar Amarre es obligatorio',
            'inputEmbarcacion.required' =>  'Ingresar la Embarcacion es obligatorio',
            'inputEmpleados.required' =>  'el empleado es un campo obligatorio',
            'inputPertenece.required' =>  'identificar a quien pertenece es obligatorio',
            'inputPropietario.required' =>  'Identificar al Propietario es obligatorio',
            'inputSocio.required' =>  'El Socio es obligatorio',
            'inputZona.required' =>  'Debe identificar la Zona',
               ];
        $validacion = Validator::make($data, $reglas, $mensajes);

        if ($validacion->fails()) {
            $errores = $validacion->errors();
            return view('form')->with('errores', $errores)
                               ->with('index', $data);
        }

        $nvform  = index::find($index->id);   
        

        $nvform->Amarre       =    $data['inputAmarre'];
        $nvform->Embarcacion  =    $data['inputEmbarcacion'];
        $nvform->Empleados    =    $data['inputEmpleados'];
        $nvform->Pertenece    =    $data['inputPertenece'];
        $nvform->Propietario  =    $data['inputPropietario'];
        $nvform->Socio        =    $data['inputSocio'];
        $nvform->Zonas        =    $data['inputZona'];
       
        $nvform->save();
      
        
        // index::create($data);
        Session::flash('message', 'Registro actualizado exitosamente');  
      //  return view('form')->with('data', $data);
        return redirect()->route('index.edit', $index->id);
        //return redirect()->route('index.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ClubNautico\index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(index $index)
    {
        $index->delete();
        Session::flash('message', 'Registro eliminado correctamente');
        return redirect()->route('index.index');    
    }
}
