<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['employees'] = Employee::paginate(3);
       
        return view('admin.empleados.index',$datos);
    }


    public function pdf($id)
    {
        //
        $empleado = Employee::findOrFail($id);
     
        $pdf = PDF::loadView('admin.empleados.pdf',['empleado'=>$empleado]);
       
        return $pdf->stream();
    
        return view('admin.empleados.pdf',compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.empleados.create');
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
        $campos = [
            'nombre' => 'required|string|max:50',
            'email' => 'required|string|max:100',
            'fecha_ingreso' => 'required|string',
            
        ];

        $mensaje = [
            'nombre.required' => 'el nombre es requerido',
            'email.required' => 'el correo es requerido',
            'fecha_ingreso.required' => 'el Autor es requerido',
            
        ];

        $this->validate($request,$campos,$mensaje);
        $dataArticles = request()->except('_token');
        Employee::create($dataArticles);
        return redirect()->route('empleados.index')->with('message', 'Nuevo empleado agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado = Employee::findOrFail($id);
        
        return view('admin.empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'nombre' => 'required|string|max:50',
            'email' => 'required|string|max:100',
            'fecha_ingreso' => 'required|string',
            
        ];

        $mensaje = [
            'nombre.required' => 'el nombre es requerido',
            'email.required' => 'el correo es requerido',
            'fecha_ingreso.required' => 'el Autor es requerido',
            
        ];

        $this->validate($request, $campos, $mensaje);



        //
        $data= request()->except(['_token', '_method']);
        Employee::where('id', '=', $id)->update($data);
        $empleado = Employee::findOrFail($id);
        return redirect()->route('empleados.index')->with('message', 'Datos modificados correctamente :)');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        
        Employee::destroy($id);
        return redirect()->route('empleados.index')->with('error', 'Empleado eliminado');
    }
}
