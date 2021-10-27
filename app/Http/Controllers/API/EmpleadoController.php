<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarEmpleadoRequest;
use App\Http\Requests\GuardarEmpleadoRequest;
use App\Http\Resources\EmpleadoResource;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EmpleadoResource::collection(Empleado::paginate(3));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarEmpleadoRequest $request)
    {
        /*return response()->json([
            'res' => true,
            'msg' => 'empleado Registrado Correctamente'
        ], 200);*/
        return (new EmpleadoResource(Empleado::create($request->all())))
                    ->additional(['msg' => 'Empleado Creado Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        /*return response()->json([
            'res' => true,
            'empleado' => $empleado
        ], 200);*/
        return new EmpleadoResource($empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarEmpleadoRequest $request, Empleado $empleado)
    {
        $empleado->update($request->all());

        /*return response()->json([
            'res' => true,
            'mensaje' => 'empleado actualizado correctamente'
        ], 200);*/
        return (new EmpleadoResource($empleado))
                    ->additional(['msg' => 'Empleado Actualizado Correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        /*return response()->json([
            'res' => true,
            'mensaje' => 'empleado eliminado correctamente'
        ], 200);*/
        return (new EmpleadoResource($empleado))
                    ->additional(['msg' => 'Empleado Eliminado Correctamente']);
    }
}
