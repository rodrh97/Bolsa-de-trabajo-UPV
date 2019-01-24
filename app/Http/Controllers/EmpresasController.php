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

    //Pagina para que la empresa vea la lista egresados
    public function egresados(){
        return view('empresa.lista_egresados');
    }

    //Pagina para que la empresa vea su perfil
    public function perfil_empresa(){
        return view('empresa.perfil');
    }

    //Pagina para que la empresa vea sus conexiones
    public function conexiones_empresa(){
        return view('empresa.conexiones');
    }

    //Pagina para que la empresa vea el perfil del egresado
    public function egresado(){
        return view('empresa.egresado');
    }

    //Pagina para que la empresa vea su trabajo publicado
    public function empresa_vacante(){
        return view('empresa.empresa_vacante');
    }
}
