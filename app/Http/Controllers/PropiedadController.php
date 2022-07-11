<?php

namespace App\Http\Controllers;

use App\Models\Propiedad;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{

    public function index(){
        return response()->json(Propiedad::with([
            'categoria',
            'tipo_propiedad',
            'agencia'
        ])->get());
    }

    public function indexHome()
    {
        return response()->json(Propiedad::with([
            'categoria',
            'tipo_propiedad'
        ])->take(8)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resp = Propiedad::create([
            'id_tipo_propiedad' => $request->tipo,
            'id_categoria_propiedad' => $request->categoria,
            'id_agencia' => $request->agencia,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'direccion' => $request->direccion,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'nro_dormitorios' => $request->dormitorios,
            'nro_bathroom' => $request->banios,
            'nro_garage' => $request->garages,
            'area' => $request->area,
            'imagen' => "https://via.placeholder.com/270x225"
        ]);

        if ($resp){
            return response()->json(["status" => 200]);
        }else{
            return response()->json(["status" => 500]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $resp = Propiedad::where('id', $request->id)->update([
            'id_tipo_propiedad' => $request->tipo,
            'id_categoria_propiedad' => $request->categoria,
            'id_agencia' => $request->agencia,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'direccion' => $request->direccion,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'nro_dormitorios' => $request->dormitorios,
            'nro_bathroom' => $request->banios,
            'nro_garage' => $request->garages,
            'area' => $request->area,
            'imagen' => "https://via.placeholder.com/270x225"
        ]);

        if ($resp){
            return response()->json(["status" => 200]);
        }else{
            return response()->json(["status" => 500]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $propiedad = Propiedad::find($request->id);
        $propiedad->delete();
        return response()->json(["status" => 200]);
    }
}
