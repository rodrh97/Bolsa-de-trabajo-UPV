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
use App\job;

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

        $count_jobs=DB::table('status_job')
        ->where('id_student',auth()->user()->id)
        ->count();

        $send_jobs=DB::table('status_job')
        ->get();
        return view('egresado.perfil', compact('users','count_jobs'));
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
    
    //Pagina para ver el perfil de la empresa
    public function egresado_perfil_empresa(){
        return view('egresado.egresado_perfil_empresa');
    }

   

}
