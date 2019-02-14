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
use App\contact;
use App\sector;
use App\company;
use App\students;
use App\careers;

class EmpresasController extends Controller
{
    //Funciones para regresar la vistas de las empresas
    
    //Función para agregar un contacto
    public function store_addcontact(){
            $contact= new contact();
            $contact->first_name=request('first_name');
            $contact->last_name=request('last_name');
            $contact->second_last_name=request('second_last_name');
            $contact->email=request('email');
            $contact->phone=request('phone');
            $contact->position=request('position');
            $contact->company_id=request('id_company');
            $contact->schedule=request('schedule');
            $contact->save();
            return redirect()->route('profile',[$contact->company_id]);
    }
    //Función para agregar una vacante
    public function store_addjob(){
        //Encontrar el id del sector y compañia
        $id_sector=sector::all()
        ->where('name',request('sector_name'))
        ->first();
            
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
        $job->id_sector=$id_sector->id;
        $job->id_company=request('id_company');
        $job->save();
        return redirect()->route('profile',[$job->id_company]);
    }
    
    //Función para mostrar la vista de editar vacante
    public function editjob($id){
        $jobs=DB::table('jobs')
        ->join('companies as c','jobs.id_company','=','c.id')
        ->select('jobs.*',
        'c.id as company_id',
        'c.rfc',
        'c.name as company_name',
        'c.phone',
        'c.email',
        'c.image_url',
        'c.country as company_country',
        'c.state as company_state',
        'c.city as company_city',
        'c.zip as company_zip',
        'c.colony as company_colony',
        'c.street as company_street',
        'c.schedule',
        'c.description as company_description')
        ->where('jobs.id',$id)
        ->get();

        return view('empresa.editjob',compact('jobs'));
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
        $jobs=DB::table('jobs as j')
        ->join('companies as c', 'c.id','=','j.id_company')
        ->join('sectors as s', 's.id','=','j.id_sector')
        ->select('c.name as company_name', 'c.phone as company_phone','c.email as company_email','j.*','s.name as sector_name')
        ->where('j.id_company',$id)
        ->latest()
        ->get();
        
        $contacts=DB::table('contacts as con')
        ->join('companies as c', 'c.id','=','con.company_id')
        ->select('c.name','con.*')
        ->where('con.company_id',$id)
        ->latest()
        ->get();

        return view('empresa.perfil', compact('sectors','companies','jobs','contacts'));
    }
    
    //Pagina para ver la vista de agregar contactos
    public function addcontact($id){
        $companies=company::findOrFail($id);

        $sectors=DB::table('sectors')
        ->select('sectors.*')
        ->get();
        $companies=DB::table('companies')
        ->select('companies.*')
        ->where('companies.id','=',$id)
        ->get();
        $jobs=DB::table('jobs as j')
        ->join('companies as c', 'c.id','=','j.id_company')
        ->join('sectors as s', 's.id','=','j.id_sector')
        ->select('c.name as company_name', 'c.phone as company_phone','c.email as company_email','j.*','s.name as sector_name')
        ->where('j.id_company',$id)
        ->latest()
        ->get();
        
        return view('empresa.addcontact', compact('sectors','companies','jobs'));
    }
    
    //Pagina para ver la vista de agregar vacantes
    public function addjob($id){
        $companies=company::findOrFail($id);

        $sectors=DB::table('sectors')
        ->select('sectors.*')
        ->get();
        $companies=DB::table('companies')
        ->select('companies.*')
        ->where('companies.id','=',$id)
        ->get();
        $jobs=DB::table('jobs as j')
        ->join('companies as c', 'c.id','=','j.id_company')
        ->join('sectors as s', 's.id','=','j.id_sector')
        ->select('c.name as company_name', 'c.phone as company_phone','c.email as company_email','j.*','s.name as sector_name')
        ->where('j.id_company',$id)
        ->latest()
        ->get();
        
        return view('empresa.addjob', compact('sectors','companies','jobs'));
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
