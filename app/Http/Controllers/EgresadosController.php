<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\users;

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
        $users=DB::table('users')->where('type','=',3)->get();
        return view('egresado.lista_egresados', ['users'=>$users]);
    }

    //Pagina para ver el perfil del egresado
    public function perfil_egresado($id){
        $users=users::findOrFail($id);
        return view('egresado.perfil',compact('users'));
    }

    //Pagina para ver el perfil de otros egresados
    public function perfil_usuario($id){
        $users=users::findOrFail($id);
        return view('egresado.perfil_usuario',compact('users'));
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
