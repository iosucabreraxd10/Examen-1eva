<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dentista;


class DentistaController extends Controller
{
    public function index(){
        $dentista = dentista::all();
        return view('dentista.index', compact('dentista'));
    }
    public function create(){
        return view('dentista.create');
    }
    public function store(Request $request){

        $reglas = [
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:dentista,dni',
        ];

        $mensajes = [
            'nombre.required' => 'El nombre es requerido',
            'apellido.required' => 'El apellido es requerido',
            'dni.required' => 'El DNI es requerido',
            'dni.unique' => 'El DNI ya existe',
        ];

        $validated = $request->validate($reglas, $mensajes);

        $dentista = new dentista();
        $dentista->nombre = $request->nombre;
        $dentista->apellido = $request->apellido;
        $dentista->dni = $request->dni;
        $dentista->fecha_nacimiento = $request->fecha_nacimiento;
        $dentista->en_vacaciones = $request->en_vacaciones;
        $dentista->save();

        return redirect('/dentista/index');
    }
    public function edit(){
        $dentista = dentista::all();
        
        return view('dentista.edit', compact('dentista'));
    }
    public function update(Request $request, $id){
        //No me funciona pero se supone que busca solo un dentista para editar
        $dentista = dentista::find(1);
        $dentista->nombre = $request->nombre;
        $dentista->apellido = $request->apellido;
        $dentista->dni = $request->dni;
        $dentista->fecha_nacimiento = $request->fecha_nacimiento;
        $dentista->en_vacaciones = $request->en_vacaciones;
        $dentista->save();
        
        return redirect('/dentista/index');
    }
    public function delete(){
        dentista::find(1)->delete();
    }
}
