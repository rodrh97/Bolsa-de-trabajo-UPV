<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EgresadosController extends Controller
{
    //Funciones para regresar la vistas de los egresados
    
    //Pagina de inicio
    public function inicio_egresado(){
        return view('egresado.inicio');
    }
    
    //Pagina de ofertas de trabajo
    public function ofertas_trabajo(){
        return view('egresado.lista_trabajo');
    }
    
    //Pagina para ver otros egresados
    public function lista_egresados(){
        return view('egresado.lista_egresados');
    }

    //Pagina para ver el perfil del egresado
    public function perfil_egresado(){
        return view('egresado.perfil');
    }

    //Pagina para ver el perfil de otros egresados
    public function perfil_usuario(){
        return view('egresado.perfil_usuario');
    }

    //Pagina para ver la conexiones del egresado
    public function conexiones_egresado(){
        return view('egresado.conexiones');
    }

    //Pagina para ver las vacantes
    public function vacante(){
        return view('egresado.vacante');
    }

}
