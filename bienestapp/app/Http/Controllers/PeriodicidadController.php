<?php

namespace App\Http\Controllers;

use App\Models\Periodicidad;
use Illuminate\Http\Request;

class PeriodicidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            return Periodicidad::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Periodicidad::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_periodicidad)
    {
        return Periodicidad::find($id_periodicidad);
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
        if(Periodicidad::where('id_periodicidad', $id)->exists()){
            $periodicidad = Periodicidad::find($id);
            $periodicidad-> nombre_periodicidad = $request->nombre_periodicidad;
            $periodicidad->save();
            return response()->json([
                "Message" => "periodicidad updated"
            ], 200);
        }else{
            return response()->json([
                "Message" => "periodicidad not found"
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
        if(Periodicidad::where('id_periodicidad', $id)->exists()){
            $periodicidad = Periodicidad::find($id);
            $periodicidad-> estado_periodicidad_activo = '0';
            $periodicidad->save();
            return response()->json([
                "Message" => "periodicidad delete"
            ], 200);
        }else{
            return response()->json([
                "Message" => "periodicidad not found"
            ], 404);
        }
    }

    public function reset($id)
    {
        if(Periodicidad::where('id_periodicidad', $id)->exists()){
            $periodicidad = Periodicidad::find($id);
            $periodicidad-> estado_periodicidad_activo = '1';
            $periodicidad->save();
            return response()->json([
                "Message" => "periodicidad reset"
            ], 200);
        }else{
            return response()->json([
                "Message" => "periodicidad not reset"
            ], 404);
        }
    }
}