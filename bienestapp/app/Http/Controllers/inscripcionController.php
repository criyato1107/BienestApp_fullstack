<?php

namespace App\Http\Controllers;

use App\Models\inscripcion;
use Illuminate\Http\Request;

class inscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            return inscripcion::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return inscripcion::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_inscripcion)
    {
        return inscripcion::find($id_inscripcion);
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
        if(inscripcion::where('id_inscripcion', $id)->exists()){
            $inscripcion = inscripcion::find($id);
            $inscripcion-> fecha_inicio_inscripcion = $request->fecha_inicio_inscripcion;
            $inscripcion-> fecha_final_inscripcion = $request->fecha_final_inscripcion;
            $inscripcion-> hora_final_inscripcion = $request->hora_final_inscripcion;
            $inscripcion->save();
            return response()->json([
                "Message" => "Inscripcion updated"
            ], 200);
        }else{
            return response()->json([
                "Message" => "Inscripcion not found"
            ], 404);
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
        if(inscripcion::where('id_inscripcion', $id)->exists()){
            $inscripcion = inscripcion::find($id);
            $inscripcion-> estado_inscripcion_activo = '0';
            $inscripcion->save();
            return response()->json([
                "Message" => "inscripcion delete"
            ], 200);
        }else{
            return response()->json([
                "Message" => "inscripcion not found"
            ], 404);
        }
    }

    public function reset($id)
    {
        if(inscripcion::where('id_inscripcion', $id)->exists()){
            $inscripcion = inscripcion::find($id);
            $inscripcion-> estado_inscripcion_activo = '1';
            $inscripcion->save();
            return response()->json([
                "Message" => "inscripcion reset"
            ], 200);
        }else{
            return response()->json([
                "Message" => "inscripcion not reset"
            ], 404);
        }
    }
}