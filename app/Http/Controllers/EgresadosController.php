<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\students;

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
        $users=users::all()->where('type','=',3);
        return view('egresado.lista_egresados', compact('users'));
    }

    //Pagina para ver el perfil del egresado
    public function perfil_egresado(){
        $users=users::all()->where('id','=',1912);
        return view('egresado.perfil', compact('users'));
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
    
    //Pagina para ver el perfil de la empresa
    public function egresado_perfil_empresa(){
        return view('egresado.egresado_perfil_empresa');
    }

}
