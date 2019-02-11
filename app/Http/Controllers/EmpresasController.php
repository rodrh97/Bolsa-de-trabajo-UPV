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
use App\job;
use App\sector;
use App\company;
use App\students;
use App\careers;

class EmpresasController extends Controller
{
    //Funciones para regresar la vistas de las empresas
    
    //Función para insertar una vacante de una empresa
    public function store(){
        //Encontrar el id del sector y compañia
        $id_sector=DB::table('sectors as s')
        ->select('s.id')
        ->where('s.name',request('sector_name'))
        ->get();

        $id_company=DB::table('companies as c')
        ->select('c.id')
        ->where('c.name',request('company_name'))
        ->get();  

        $job= new job();
        $job->name=request('name');
        $job->description=request('description');
        $job->salary=request('salary');
        $job->job_type=request('job_type');
        $job->country=request('country');
        $job->state=request('state');
        $job->city=request('city');
        $job->zip=request('zip');
        $job->colony=request('colony');
        $job->street=request('street');
        $job->id_sector=request($id_sector);
        $job->id_company=request($id_company);
        $job->save();
        return back();
    }

    //Pagina de inicio
    public function inicio_empresa(){
        return view('empresa.inicio');
    }

    //Pagina para que la empresa vea sus trabajos que ha publicado
    public function tus_trabajos(){
        return view('empresa.tus_trabajos');
    }

    //Pagina para que la empresa vea la lista egresados
    public function egresados(Request $request){
        //Declarar variables para poder realizar la consulta correspondiente
        $university_id  = $request->get('university_id');
    	$abbreviation = $request->get('abbreviation');

        //Obetener a los estudiantes acorde a su carrera
        $users=DB::table('users')
        ->join('students','users.id','=','students.user_id')
        ->join('careers','students.career_id','=','careers.id')
        ->select('users.*','students.*','careers.*')
        ->where('university_id','LIKE',"%$university_id%")
        ->where('abbreviation','LIKE',"%$abbreviation%")
        ->paginate(16);

        //Obtener la lista de carreras
        $careers=DB::table('careers')
        ->select('careers.*')
        ->get();

        //Obtener la lista de los alumnos
        $students=DB::table('students')
        ->join('users','students.user_id','=','users.id')
        ->select('students.*', 'users.*')
        ->get();

        return view('empresa.lista_egresados',compact('users','careers','students'));
    }

    //Pagina para que la empresa vea su perfil
    public function perfil_empresa($id){
        $companies=company::findOrFail($id);

        $sectors=DB::table('sectors')
        ->select('sectors.*')
        ->get();
        $companies=DB::table('companies')
        ->select('companies.*')
        ->where('companies.id','=',$id)
        ->get();
        return view('empresa.perfil', compact('sectors','companies'));
    }

    //Pagina para que la empresa vea sus conexiones
    public function conexiones_empresa(){
        return view('empresa.conexiones');
    }

    //Pagina para que la empresa vea el perfil del egresado
    public function egresado($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $users=users::findOrFail($id);

        //Mostrar la carrera del alumno correspondiente
        $careers=DB::table('students')
        ->join('users','students.user_id','=','users.id')
        ->join('careers','careers.id','=','students.career_id')
        ->select('students.*', 'users.*','careers.*')
        ->where('users.id','=',$id)
        ->get();
        
        return view('empresa.egresado', compact('users','careers'));
    }

    //Pagina para que la empresa vea su trabajo publicado
    public function empresa_vacante(){
        return view('empresa.empresa_vacante');
    }
}
