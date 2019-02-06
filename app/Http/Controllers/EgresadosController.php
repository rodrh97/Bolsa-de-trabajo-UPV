<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Helpers\DeleteHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
        //Declarar variables para poder realizar la consulta correspondiente
        $university_id  = $request->get('university_id');
    	$abbreviation = $request->get('abbreviation');

        //Obetener a los estudiantes acorde a su carrera
        $students_upv=DB::table('users')
        ->join('students','users.id','=','students.user_id')
        ->join('careers','students.career_id','=','careers.id')
        ->select('users.*','students.*','careers.*')
        ->where('university_id','LIKE',"%$university_id%")
        ->where('abbreviation','LIKE',"%$abbreviation%")
        ->orderBy('university_id')
        ->paginate(12);
        
        //Obtener la lista de carreras para su busqueda
        $careers=DB::table('careers')
        ->select('careers.*')
        ->get();

        //Obtener la lista de los alumnos para su busqueda
        $students=DB::table('students')
        ->join('users','students.user_id','=','users.id')
        ->select('students.*', 'users.*')
        ->get();

        return view('egresado.lista_egresados', compact('students_upv','careers','students'))->render();
    }

    //Pagina para ver el perfil del egresado
    public function perfil_egresado($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $users=users::findOrFail($id);

        //Mostrar la carrera del alumno correspondiente
        $users=DB::table('students')
        ->join('users','students.user_id','=','users.id')
        ->join('careers','careers.id','=','students.career_id')
        ->select('students.*', 'users.*','careers.*')
        ->where('students.user_id','=',$id)
        ->get();
        return view('egresado.perfil', compact('users'));
    }

    public function update_perfil_egresado($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $users=users::find($id);

        //Mostrar la carrera del alumno correspondiente
        $users=DB::table('students')
        ->join('users','students.user_id','=','users.id')
        ->select('students.*', 'users.*')
        ->where('students.user_id',$id)
        ->update(['phone' => request('phone')]);
        return back();
    }

    //Pagina para ver el perfil de otros egresados
    public function perfil_usuario($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $users=users::findOrFail($id);

        //Mostrar la carrera del alumno correspondiente
        $careers=DB::table('students')
        ->join('users','students.user_id','=','users.id')
        ->join('careers','careers.id','=','students.career_id')
        ->select('students.*', 'users.*','careers.*')
        ->where('users.id','=',$id)
        ->get();
        return view('egresado.perfil_usuario', compact('users','careers'));
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
