<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function datosEmpresa(){
        return view('admin.informacionEmpresa.datosEmpresa');
    }

    public function documentos(){
        return view('admin.informacionEmpresa.documentos');
    }

    public function nuevoCliente(){
        return view('admin.clientes.nuevoCliente');
    }

    public function listadoCliente(){
        return view('admin.clientes.listadoCliente');
    }

    public function proovedores(){
        return view('admin.proveedores.proovedores');
    }

    public function nuevoProveedor(){
        return view('admin.proveedores.nuevoProveedor');
    }

    public function mainOrden(){
        return view('admin.orden_de_trabajo.main');
    }
    
    public function presupuestos(){
        return view('admin.orden_de_trabajo.presupuestos');
    }

    public function cotizaciones(){
        return view('admin.orden_de_trabajo.cotizaciones');
    }

    public function ordenDeProducto(){
        return view('admin.orden_de_trabajo.ordenDeProducto');
    }

    public function ordenDeCompra(){
        return view('admin.orden_de_trabajo.ordenDeCompra');
    }

    public function solicitudFacturacion(){
        return view('admin.orden_de_trabajo.solicitudFacturacion');
    }

    public function RecursosTangibles(){
        return view('admin.administrativo.recursosFisicos.RecursosTangibles');
    }

    public function RecursosIntangibles(){
        return view('admin.administrativo.recursosFisicos.RecursosIntangibles');
    }

    public function cuentasPorCobrar(){
        return view('admin.administrativo.recursosEconomicos.cuentasPorCobrar');
    }
}
