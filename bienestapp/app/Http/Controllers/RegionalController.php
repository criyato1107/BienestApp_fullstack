<?php

namespace App\Http\Controllers;

use App\Models\Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            return Regional::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Regional::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_regional)
    {
        return Regional::find($id_regional);
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
        if(Regional::where('id_regional', $id)->exists()){
            $regional = Regional::find($id);
            $regional-> nombre_regional = $request->nombre_regional;
            $regional->save();
            return response()->json([
                "Message" => "Regional updated"
            ], 200);
        }else{
            return response()->json([
                "Message" => "Regional not found"
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
        if(Regional::where('id_regional', $id)->exists()){
            $regional = Regional::find($id);
            $regional-> estado_regional_activo = '0';
            $regional->save();
            return response()->json([
                "Message" => "regional delete"
            ], 200);
        }else{
            return response()->json([
                "Message" => "Regional not found"
            ], 404);
        }
    }

    public function reset($id)
    {
        if(Regional::where('id_regional', $id)->exists()){
            $regional = Regional::find($id);
            $regional-> estado_regional_activo = '1';
            $regional->save();
            return response()->json([
                "Message" => "regional reset"
            ], 200);
        }else{
            return response()->json([
                "Message" => "Regional not reset"
            ], 404);
        }
    }
}