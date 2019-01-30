<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\users;
use App\students;
use App\careers;

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
    public function lista_egresados(Request $request){
        $university_id  = $request->get('university_id');
    	$career = $request->get('career');

        //Obetener a los estudiantes acorde a su carrera
        $users=DB::table('users')
        ->join('students','users.id','=','students.user_id')
        ->join('careers','students.career_id','=','careers.id')
        ->select('users.*','students.*','careers.*')
        ->where('university_id','LIKE',"%$university_id%")
        ->paginate(12);

        //Obtener la lista de carreras
        $careers=DB::table('careers')
        ->select('careers.*')
        ->get();
        return view('egresado.lista_egresados', compact('users','careers'));
    }

    //Pagina para ver el perfil del egresado
    public function perfil_egresado($id){
        $users=users::findOrFail($id);
        return view('egresado.perfil',compact('users'));
    }

    //Pagina para ver el perfil de otros egresados
    public function perfil_usuario($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $users=users::findOrFail($id);
        return view('egresado.perfil_usuario', compact('users'));
    }

    //Pagina para ver la conexiones del egresado
    public function conexiones_egresado($id){
        $users=users::findOrFail($id);
        return view('egresado.conexiones',compact('users'));
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
