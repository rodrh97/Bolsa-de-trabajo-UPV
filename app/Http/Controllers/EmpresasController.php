<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    //Funciones para regresar la vistas de las empresas
    
    //Pagina de inicio
    public function inicio_empresa(){
        return view('empresa.inicio');
    }

    //Pagina para que la empresa vea sus trabajos que ha publicado
    public function tus_trabajos(){
        return view('empresa.tus_trabajos');
    }
}
