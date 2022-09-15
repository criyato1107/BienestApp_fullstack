<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $union = DB::select('SELECT o.id_regional, o.nombre_centro, e.nombre_regional, o.estado_centro_activo
        FROM regional e
        INNER JOIN centro o
        ON o.id_centro = e.id_regional;');
        return $union;
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Centro::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_centro)
    {
        return Centro::find($id_centro);
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
        if(Centro::where('id_centro', $id)->exists()){
            $centro = Centro::find($id);
            $centro-> nombre_centro = $request->nombre_centro;
            $centro->save();
            return response()->json([
                "Message" => "centro updated"
            ], 200);
        }else{
            return response()->json([
                "Message" => "centro not found"
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
        if(Centro::where('id_centro', $id)->exists()){
            $centro = Centro::find($id);
            $centro-> estado_centro_activo = '0';
            $centro->save();
            return response()->json([
                "Message" => "centro delete"
            ], 200);
        }else{
            return response()->json([
                "Message" => "centro not found"
            ], 404);
        }
    }

    public function reset($id)
    {
        if(Centro::where('id_centro', $id)->exists()){
            $centro = Centro::find($id);
            $centro-> estado_centro_activo = '1';
            $centro->save();
            return response()->json([
                "Message" => "centro reset"
            ], 200);
        }else{
            return response()->json([
                "Message" => "centro not reset"
            ], 404);
        }
    }
}