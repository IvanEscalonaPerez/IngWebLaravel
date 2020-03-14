<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Producto;

class ProductoControler extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->enviarRespuesta(Producto::paginate(),'Listado Productos',200);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Productos::validar($request->all());
        if($validator->fails()){
            return $this->enviarError('Error al crear un nuevo producto', $validator->errors(), 400);
        }
        $producto = Producto::create([
            'Nombre' => $request->input('Nombre'),
            'Descripcion' => $request->input('Descripcion'),
            'Cantidad' => $request->input('Cantidad'),
            'Precio' => $request->input('Precio'),
            'Codigo' => $request->input('Codigo')
        ]);

        return $this->enviarRespuesta($producto->toArray(),'Producto creado', 200);

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
