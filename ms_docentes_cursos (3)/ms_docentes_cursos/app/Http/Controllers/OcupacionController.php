<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocupacion;
use Illuminate\Http\Response;
class OcupacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Ocupacion::all();
        return new Response($rows);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $row = new Ocupacion();
        $row->id = $input['id'];
        $row->nombre = $input['nombre'];
        $row->save();
        return new Response($row);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Ocupacion::find($id);
        if(empty($row)){
            return new Response('Disculpe, no encontramos este registro',404);
        }
        return $row;
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
        $row =Ocupacion::find($id);
        if(empty($row)){
            return new Response('Disculpe, no encontramos este registro',404);
        }
        $input = $request->all();
        $row->id = $input['id'];
        $row->nombre = $input['nombre'];
        $row->save();
        return $row;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row =Ocupacion::find($id);
        if(empty($row)){
            return new Response('Disculpe, no encontramos este registro',404);
        }
        $row->delete();
        return 'Se ha eliminado correctamente el registro';
    }
}
