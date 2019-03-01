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
use App\competence;
use App\users;
use App\students;
use App\careers;
use App\job;
use App\company;
use App\students_competences;

class EgresadosController extends Controller
{
    //Funciones para regresar la vistas de los egresados
    
    //Pagina de inicio
    public function inicio_egresado(){
        return view('egresado.inicio');
    }
    
    //Pagina de ofertas de trabajo
    public function ofertas_trabajo(){
        $companies=DB::table('companies')
        ->get();
        return view('egresado.lista_trabajo', compact('companies'));
    }
    
    //Pagina para ver otros egresados
    public function lista_egresados(Request $request){
        //Declarar variables para poder realizar la consulta correspondiente
        $university_id  = $request->get('university_id');
        $abbreviation = $request->get('abbreviation');
        
        $students_upv=DB::table('siita_db.users')
        ->join('siita_db.students','siita_db.users.id','=','siita_db.students.user_id')
        ->join('siita_db.careers','siita_db.students.career_id','=','siita_db.careers.id')
        ->select('siita_db.users.*','siita_db.students.*','siita_db.careers.*')
        ->where('siita_db.users.university_id','LIKE',"%$university_id%")
        ->where('siita_db.careers.abbreviation','LIKE',"%$abbreviation%")
        ->orderBy('siita_db.users.university_id')
        ->paginate(8);

        //Obtener la lista de carreras para su busqueda
        $careers=DB::table('siita_db.careers')
        ->select('siita_db.careers.*')
        ->get();

        //Obtener la lista de los alumnos para su busqueda
        $students=DB::table('siita_db.users')
        ->select('siita_db.users.*')
        ->where('siita_db.users.type',3)
        ->get();    

        return view('egresado.lista_egresados', compact('students_upv','careers','students'));
    }

    //Pagina para ver otros egresados con ajax
    public function lista_egresados_ajax(Request $request){
        //Declarar variables para poder realizar la consulta correspondiente
        $university_id  = $request->get('university_id');
        $abbreviation = $request->get('abbreviation');
        
        $students_upv=DB::table('siita_db.users')
        ->join('siita_db.students','siita_db.users.id','=','siita_db.students.user_id')
        ->join('siita_db.careers','siita_db.students.career_id','=','siita_db.careers.id')
        ->select('siita_db.users.*','siita_db.students.*','siita_db.careers.*')
        ->where('siita_db.users.university_id','LIKE',"%$university_id%")
        ->where('siita_db.careers.abbreviation','LIKE',"%$abbreviation%")
        ->orderBy('siita_db.users.university_id')
        ->paginate(8);

        //Obtener la lista de carreras para su busqueda
        $careers=DB::table('siita_db.careers')
        ->select('siita_db.careers.*')
        ->get();

        //Obtener la lista de los alumnos para su busqueda
        $students=DB::table('siita_db.users')
        ->select('siita_db.users.*')
        ->where('siita_db.users.type',3)
        ->get();    

        return view('egresado.lista_egresados_ajax', compact('students_upv','careers','students'));
    }

    //Pagina para ver el perfil del egresado
    public function perfil_egresado($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $users=users::findOrFail($id);

        //Mostrar la carrera del alumno correspondiente
        $users=DB::table('siita_db.students')
        ->join('siita_db.users','siita_db.students.user_id','=','siita_db.users.id')
        ->join('siita_db.careers','siita_db.careers.id','=','siita_db.students.career_id')
        ->select('siita_db.students.*', 'siita_db.users.*','siita_db.careers.*')
        ->where('siita_db.students.user_id','=',$id)
        ->get();

        $count_jobs=DB::table('status_job')
        ->where('id_student',auth()->user()->id)
        ->count();

        $contador_pendientes=DB::table('status_job')
        ->where('id_student',auth()->user()->id)
        ->where('status','Pendiente')
        ->count();

        $contador_aceptados=DB::table('status_job')
        ->where('id_student',auth()->user()->id)
        ->where('status','Aceptado')
        ->count();

        $contador_rechazados=DB::table('status_job')
        ->where('id_student',auth()->user()->id)
        ->where('status','Rechazado')
        ->count();

        $contador_competencias=DB::table('students_competences as sc')
        ->join('students as s', 's.user_id','=','student_id')
        ->where('student_id',auth()->user()->id)
        ->count();

        $competences=DB::table('students_competences as sc')
        ->join('students as s', 's.user_id','=','student_id')
        ->join('competences as c', 'c.id','=','competence_id')
        ->select('c.id as id_competence','c.name','sc.*','s.*')
        ->where('sc.student_id',auth()->user()->id)
        ->get();

        $competencias_pendientes=DB::table('students_competences')
        ->where('status',0)
        ->count();

        $competencias_aceptadas=DB::table('students_competences')
        ->where('status',1)
        ->count();
        
        $trabajos_pendientes=DB::table('status_job')
        ->join('jobs as j','j.id','=','id_job')
        ->join('companies as c','c.id','=','j.id_company')
        ->where('id_student',auth()->user()->id)
        ->where('status','Pendiente')
        ->select('j.*','status_job.*','c.name as company_name')
        ->get();
        return view('egresado.perfil', compact('users','trabajos_pendientes','count_jobs','contador_pendientes','contador_aceptados','contador_rechazados','contador_competencias','competences','competencias_pendientes','competencias_aceptadas'));
    }

    public function editprofile($id){
        $users=users::findOrFail($id);

        //Mostrar la carrera del alumno correspondiente
        $users=DB::table('siita_db.students')
        ->join('siita_db.users','siita_db.students.user_id','=','siita_db.users.id')
        ->join('siita_db.careers','siita_db.careers.id','=','siita_db.students.career_id')
        ->select('siita_db.students.*', 'siita_db.users.*','siita_db.careers.*')
        ->where('siita_db.students.user_id','=',$id)
        ->get();

        return view('egresado.editprofile',compact('users'));
    }

    public function update_profile($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $users=users::find($id);
        $image = Input::file('image');
        $image2 = Input::get('image_2');

        //Actualizar foto, elimina la anterior
        if ($image!=null) {
            if ($image2!='storage/no_image.png') {
                unlink(public_path()."/".$image2);
            }
            $path=Input::file('image')->store('/public/students');
            $image_url = 'storage/students/'.Input::file('image')->hashName();
            DB::update('UPDATE siita_db.users SET image_url = ? WHERE id = ?', [$image_url, $id]);
        }

        //Mostrar la carrera del alumno correspondiente
        $users=DB::table('siita_db.students')
        ->join('siita_db.users','siita_db.students.user_id','=','siita_db.users.id')
        ->select('siita_db.students.*', 'siita_db.users.*')
        ->where('siita_db.students.user_id',$id)
        ->update(['siita_db.students.phone' => request('phone'),]);
        alert()->success('Se ha actualizado tu perfil','Bien Hecho!!!')->autoclose(4000);
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
        $information=DB::table('students')
        ->join('users','students.user_id','=','users.id')
        ->join('careers','careers.id','=','students.career_id')
        ->select('students.*', 'users.*','careers.*')
        ->where('users.id','=',$id)
        ->get();
        return view('egresado.conexiones',compact('users','information'));
    }

    //Pagina para ver las vacantes
    public function vacante($id){
        $jobs=job::find($id);
        $jobs=DB::table('jobs')
        ->join('companies as c', 'c.id','=','jobs.id_company')
        ->join('sectors as s', 's.id','=','jobs.id_sector')
        ->select('jobs.*','c.name as company_name','s.name as sector_name')
        ->where('jobs.id',$id)
        ->get();
        
        $id_student=students::all()
        ->where('user_id',auth()->user()->id)
        ->first();

        $status=DB::table('status_job')
        ->where('id_job','=',$id)
        ->where('id_student','=',$id_student->user_id)
        ->count();

        return view('egresado.vacante', compact('jobs','status'));
    }

    public function sendjob(){
        $id_job=request('id_job');
        $id_student=request('id_student');
        $status=request('status');

        $query=DB::table('status_job')
        ->insert(
            array('id_student' => $id_student, 'id_job' => $id_job, 'status' => $status)
        );
        alert()->success('La solicitud se ha enviado correctamente','Bien Hecho!!!')->autoclose(4000);
        return back();
    }

    public function destroy_sendjob($id){
        $id_student=students::all()
        ->where('user_id',auth()->user()->id)
        ->first();

        $query=DB::table('status_job')
        ->where('id_job',$id)
        ->where('id_student','=',$id_student->user_id)
        ->delete();

        alert()->success('Tu solicitud ha sido cancelada','Bien Hecho!!!')->autoclose(4000);
        return back();
    }

    public function addcompetence($id){
        //Mostrar un perfil de usuario con el id correspondiente
        $users=users::findOrFail($id);

        //Mostrar la carrera del alumno correspondiente
        $users=DB::table('siita_db.students')
        ->join('siita_db.users','siita_db.students.user_id','=','siita_db.users.id')
        ->join('siita_db.careers','siita_db.careers.id','=','siita_db.students.career_id')
        ->select('siita_db.students.*', 'siita_db.users.*','siita_db.careers.*')
        ->where('siita_db.students.user_id','=',$id)
        ->get();

        /*$search_id=students::join('users','users.id','=','user_id')
        ->where('user_id',auth()->user()->id)
        ->first();*/

        //$id_student=(int)$search_id->university_id;
       $id_student=auth()->user()->id;
       $competences=DB::table('competences')
        ->join('students_competences','competences.id','=','students_competences.competence_id')
        ->where('students_competences.student_id',$id_student)
        ->get();

        $competences_not_asigned=DB::table('competences')
        ->whereNotExists(function ($query) use ($id_student){
            $query->select(DB::raw(1))
            ->from('students_competences')
            ->whereRaw('competences.id = students_competences.competence_id')
            ->where('students_competences.student_id',$id_student);
        })
        ->get();

        $count_competences=DB::table('students_competences')
        ->where('student_id',$id_student)
        ->count();

        $students_competences=DB::table('students_competences')
        ->join('competences as c','c.id','=','competence_id')
        ->select('students_competences.status')
        ->get();

        return view('egresado.addcompetence', compact('users','competences','count_competences','students_competences','competences_not_asigned','id_student'));
    }

    public function store_addcompetences(Request $request){
       
        $competences_ids=$request->competences;
        foreach($competences_ids as $id){
            $students_competences=new students_competences();
            $students_competences->student_id=auth()->user()->id;
            $students_competences->competence_id=$id;
            $students_competences->save();
        }

        alert()->success('La solicitud de competencias de ha enviado correctamente','Bien Hecho!!!')->autoclose(4000);
        return back();
    }

    
    //Pagina para ver el perfil de la empresa
    public function egresado_perfil_empresa($id){
        $companies=company::findOrFail($id);

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

        return view('egresado.egresado_perfil_empresa', compact('companies','jobs','contacts'));
    }

   

}
