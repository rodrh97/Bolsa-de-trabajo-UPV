<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio_egresado()
    {
        $jobs=DB::table('jobs')
        ->join('companies as c','c.id','=','jobs.id_company')
        ->join('sectors as s','s.id','=','jobs.id_sector')
        ->select('c.name as company_name', 'c.image_url','jobs.*','s.name as sector_name')
        ->latest()
        ->get();
        return view('egresado.inicio', compact('jobs'));
    }
}
