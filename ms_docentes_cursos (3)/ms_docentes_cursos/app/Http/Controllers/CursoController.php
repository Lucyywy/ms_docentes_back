<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Http\Response;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Curso::all();
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
        $row = new Curso();
        $row->cod = $input['cod'];
        $row->nombre= $input['nombre'];
        $row->codDocente = $input['codDocente'];
        $row->save();
        return new Response($row);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cod
     * @return \Illuminate\Http\Response
     */
    public function show($cod)
    {
        $row =Curso::find($cod);
        if(empty($row)){
            return new Response('Didculpe, no encontramos este registro',404);
        }
        return $row;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod)
    {
        $row =curso::find($cod);
        if(empty($row)){
            return new Response('Disculpe, no encontramos este registro',404);
        }
        $input = $request->all();
        $row->cod = $input['cod'];
        $row->nombre= $input['nombre'];
        $row->codDocente = $input['codDocente'];
        $row->save();
        return $row;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cod
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod)
    {
        $row =Curso::find($cod);
        if(empty($row)){
            return new Response('Disculpe,no encontramos este registro',404);
        }
        $row->delete();
        return 'Se ha eliminado correctamente el registro :)';
    }

}
