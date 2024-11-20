<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Models\dentista;

class ClienteController extends Controller
{
    public function index(){
        $cliente = cliente::all();
        return view('cliente.index', compact('cliente'));
    }
    public function create(){
        $dentista = dentista::all();

        return view('cliente.create', compact('dentista'));
    }
    public function store(Request $request){

        $reglas = [
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:cliente,dni',
        ];

        $mensajes = [
            'nombre.required' => 'El nombre es requerido',
            'apellido.required' => 'El apellido es requerido',
            'dni.required' => 'El DNI es requerido',
            'dni.unique' => 'El DNI ya existe',
        ];

        $validated = $request->validate($reglas, $mensajes);

        $cliente = new cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;

        $dentista = dentista::all();
        $dentista->nombre;
        $dentista->apellido;

        return redirect('/cliente/index');
    }
}
