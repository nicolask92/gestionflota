<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Administracion extends Controller
{
    // Clientes
    public function agregar_cliente() {

        $clientes = App\Clientes::all();

        return view('administracion.clientes', compact('clientes'));
        }

    public function agregado_cliente(Request $request) {

        $request->validate([
            'cliente' => 'required',
            'razon_social' => 'required',
            'cuit' => 'required',
            'factura' => 'required'
        ]);

        $cliente_lista = App\Clientes::all();
        $cliente = new App\Clientes;

        $clientes->cliente = $request->cliente;
        $clientes->razon_social = $request->razon_social;
        $clientes->cuit = $request->cuit;
        $clientes->factura = $request->factura;
        

        return back()->with('mensaje_success', 'Cliente Agregado');
            }


    // Tarifas
    public function agregar_tarifas() {
        return view('administracion.tarifas');
    }


    // Moviles
    public function agregar_moviles() {
        return view('administracion.moviles');
    }


    // Gastos
    public function agregar_gastos() {
        return view('administracion.gastos');
    }
}
