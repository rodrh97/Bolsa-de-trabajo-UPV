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
use Alert;
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
            alert()->success('Tu contacto ha sido agregado correctamente','Bien Hecho!!!')->autoclose(4000);
            return redirect()->route('profile',[$contact->company_id]);
    }

     //Función para mostrar la vista de editar un contacto
     public function editcontact($id){
        $contacts=DB::table('contacts')
        ->join('companies as c','contacts.company_id','=','c.id')
        ->select('contacts.*',
        'c.id as id_company',
        'c.rfc',
        'c.name as company_name',
        'c.phone as company_phone',
        'c.email as company_email',
        'c.image_url',
        'c.country as company_country',
        'c.state as company_state',
        'c.city as company_city',
        'c.zip as company_zip',
        'c.colony as company_colony',
        'c.street as company_street',
        'c.schedule as company_schedule',
        'c.description as company_description')
        ->where('contacts.id',$id)
        ->get();

        return view('empresa.editcontact',compact('contacts'));
    }

    public function update_contact($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $contacts=contact::find($id);

        //Mostrar la carrera del alumno correspondiente
        $contacts=DB::table('contacts')
        ->select('contacts.*')
        ->where('contacts.id',$id)
        ->update(['phone' => request('phone'),'email' => request('email'),'schedule' => request('schedule')]);
        alert()->success('Tu contacto ha sido actualizado correctamente','Bien Hecho!!!')->autoclose(4000);
        return back();
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
        $job->deleted=request('deleted');
        $job->save();
        alert()->success('Tu vacante ha sido agregado correctamente','Bien Hecho!!!')->autoclose(4000);
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

    public function update_job($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $jobs=job::find($id);

        //Mostrar la carrera del alumno correspondiente
        $jobs=DB::table('jobs')
        ->select('jobs.*')
        ->where('jobs.id',$id)
        ->update(['salary' => request('salary'),'description' => request('description'),'deleted' => request('status')]);
        alert()->success('Tu vacante ha sido actualizado correctamente','Bien Hecho!!!')->autoclose(4000);
        return back();
    }

    public function update_status_job(Request $request,$id){
        if ($request->has('job1')){
             //Mostrar un perfil de usuario con el id correspondiente
            $id=request('id_job');

            //Mostrar la carrera del alumno correspondiente
            $jobs=DB::table('jobs')
            ->select('jobs.*')
            ->where('jobs.id',$id)
            ->update(['deleted' => request('job1')]);
            alert()->success('Tu vacante ha cambiado su estado','Bien Hecho!!!')->autoclose(4000);
            return back();
        }
        if ($request->has('job2')){
            //Mostrar un perfil de usuario con el id correspondiente
           $id=request('id_job');

           //Mostrar la carrera del alumno correspondiente
           $jobs=DB::table('jobs')
           ->select('jobs.*')
           ->where('jobs.id',$id)
           ->update(['deleted' => request('job2')]);
           alert()->success('Tu vacante ha cambiado su estado','Bien Hecho!!!')->autoclose(4000);
           return back();
       }
       if ($request->has('contact1')){
        $id=request('id_contact');
        //Mostrar la carrera del alumno correspondiente
        $contacts=DB::table('contacts')
        ->select('contacts.*')
        ->where('contacts.id',$id)
        ->update(['deleted' => request('contact1')]);
        alert()->success('Tu contacto ha cambiado su estado','Bien Hecho!!!')->autoclose(4000);
        return back();
        }
        if ($request->has('contact2')){
            $id=request('id_contact');
            //Mostrar la carrera del alumno correspondiente
            $contacts=DB::table('contacts')
            ->select('contacts.*')
            ->where('contacts.id',$id)
            ->update(['deleted' => request('contact2')]);
            alert()->success('Tu contacto ha cambiado su estado','Bien Hecho!!!')->autoclose(4000);
            return back();
        }
    }

    //Pagina de inicio
    public function inicio_empresa(){
        $job_requests=DB::table('status_job as status')
        ->join('jobs as j','j.id','=','status.id_job')
        ->join('companies as c','c.id','=','j.id_company')
        ->join('students as s','s.user_id','=','status.id_student')
        ->join('users as u','u.id','=','s.user_id')
        ->get();

        return view('empresa.inicio', compact('job_requests'));
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
        
        /*$email=['rodri5@live.com.mx'];

        $array_email=DB::table('contacts as con')
        ->join('companies as c', 'c.id','=','con.company_id')
        ->select('con.email')
        ->where('c.id',$id)
        ->get();

        
        $count_email=DB::table('contacts as con')
        ->join('companies as c', 'c.id','=','con.company_id')
        ->select('con.email')
        ->where('c.id',$id)
        ->count();

        for ($i=0; $i <$count_email ; $i++) {
            
            if($array_email[$i]==$email){
                dd('Si existe');
            }else{
                dd('No existe');
            }
        }*/
        /*dd($sectors=DB::table('companies')
        ->join('sectors','sectors.id','=','companies.id_sector')
        ->select('sectors.*')
        ->get());*/
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

        $count_contacts=DB::table('contacts')
        ->join('companies as c', 'c.id','=','company_id')
        ->where('company_id',$id)
        ->count();

        $count_contacts_no_avialable=DB::table('contacts')
        ->join('companies as c', 'c.id','=','company_id')
        ->where('company_id',$id)
        ->where('deleted',1)
        ->count();
        
        $count_contacts_avialable=DB::table('contacts')
        ->join('companies as c', 'c.id','=','company_id')
        ->where('company_id',$id)
        ->where('deleted',0)
        ->count();

        $count_jobs=DB::table('jobs')
        ->join('companies as c', 'c.id','=','id_company')
        ->where('id_company',$id)
        ->count();
        
        $count_jobs_no_post=DB::table('jobs')
        ->join('companies as c', 'c.id','=','id_company')
        ->where('id_company',$id)
        ->where('deleted',1)
        ->count();

        $count_jobs_post=DB::table('jobs')
        ->join('companies as c', 'c.id','=','id_company')
        ->where('id_company',$id)
        ->where('deleted',0)
        ->count();

        return view('empresa.perfil', compact('companies','jobs','contacts','count_contacts','count_jobs','count_jobs_no_post','count_jobs_post'));
    }

    //Función para mostrar la vista de editar perfil
    public function editprofile($id){
        $companies=DB::table('companies')
        ->where('companies.id',$id)
        ->get();
        return view('empresa.editprofile',compact('companies'));
    }

    public function update_profile($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $companies=company::find($id);

        //Mostrar la carrera del alumno correspondiente
        $companies=DB::table('companies')
        ->select('companies.*')
        ->where('companies.id',$id)
        ->update(['description' => request('description'),'schedule' => request('schedule'),'phone' => request('phone'),'email' => request('email')]);
        alert()->success('Tu perfil ha sido actualizado correctamente','Bien Hecho!!!')->autoclose(4000);
        return back();
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
