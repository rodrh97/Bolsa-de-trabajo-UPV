@extends('empresa.layout')
@section('titulo')
    Egresados Empresa
@endsection
@section('menu')
      <div class="box-shadow-for-ui">
        <div class="uou-block-2b">
          <div class="container"> <a href="/inicio_empresa"><img src="/assets/images/logoupv.png" alt="" width="200px" height="100px"></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
            <nav class="nav">
              <ul class="sf-menu">
                <li><a href="/inicio_empresa" style="color:white;"><i class="fa  fa-home"></i></a></li>
                <li> <a href="/tus_trabajos" style="color:white;"><i class="fas fa-clipboard-list"></i> Tus Trabajos</a> </li>
                <li> <a href="/egresados" style="color:white;"><i class="fas fa-user-graduate"></i> Egresados</a> </li>
                <li> <a href="/perfil_empresa" style="color:white;"><i class="fas fa-building"></i> Tu perfil</a></li>
                <li><a href="/conexiones_empresa" style="color:white;"><i class="fab fa-connectdevelop"></i> Conexiones</a></li>
                <li><a href="/" style="color:white;"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- end .uou-block-2b --> 
      </div>
@endsection

@section('contenido')
      <!-- SUB Banner -->
  <div class="profile-bnr sub-bnr user-profile-bnr">
    <div class="position-center-center">
      <div class="container">
        <h2><i class="fas fa-user-graduate"></i> Egresados</h2>
      </div>
    </div>
  </div>
  
  <!-- search -->
  {!! Form::open(['route' => 'users', 'method' => 'GET']) !!}
  <div class="search-pro">
    <div class="map-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="map-search-fields">
                  <div class="field">
                    {{ Form::text('university_id', null, ['list'=>'university_id','placeholder' => 'Buscar matricula']) }}
                      <datalist id="university_id">
                       @foreach ($students as $student)
                        <option value="{{$student->university_id}}">
                       @endforeach
                      </datalist>
                  </div>
                  <div class="field">
                    {{ Form::text('abbreviation', null, ['list'=>'abbreviation','placeholder' => 'Buscar carrera']) }}
                      <datalist id="abbreviation">
                       @foreach ($careers as $career)
                        <option value="{{$career->abbreviation}}">
                       @endforeach
                      </datalist>
                  </div>
            </div>
            <div class="search-button">
              <button type="submit">Buscar Egresado</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
  <!-- Members -->
  <section class="pro-mem">
    <div class="container pb30">
      <h3>Lista de Egresados</h3>
      {{ $users->render() }}
      <div class="row">
        @foreach ($users as $user)  
        <div class="col-sm-3">
          <div class="uou-block-6a"> <img src="images/member-1.png" alt="">
          <a href="/egresado/{{$user->user_id}}"><h6>{{$user->first_name}}</a> <span>Matrícula: {{$user->university_id}}</span><span>Carrera: {{$user->abbreviation}}</span></h6>
            <p></p>
          </div>
          <!-- end .uou-block-6a --> 
        </div>
        @endforeach
        
      </div>
    </div>
  </section>
</div>
@endsection
@section('pie_pagina')
    <!-- Footer -->
  <div class="uou-block-4a secondary dark">
      <div class="container">
        <ul class="links">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
        </ul>
        <p>Copyright &copy; 2015 <a href="#">UOUAPPS</a>. All Rights reserved.</p>
      </div>
    </div>
    <!-- end .uou-block-4a --> 
    
    <div class="uou-block-11a">
      <h5 class="title">Menu</h5>
      <a href="#" class="mobile-sidebar-close">&times;</a>
      <nav class="main-nav">
        <ul>
          <li><a href="/inicio_empresa" style="color:white;"><i class="fa  fa-home"></i> Inicio</a></li>
          <li> <a href="/tus_trabajos" style="color:white;"><i class="fas fa-clipboard-list"></i> Tus Trabajos</a> </li>
          <li> <a href="/egresados" style="color:white;"><i class="fas fa-users"></i> Egresados</a> </li>
          <li> <a href="/perfil_empresa" style="color:white;"><i class="fas fa-user"></i> Tu perfil</a></li>
          <li><a href="/conexiones_empresa" style="color:white;"><i class="fab fa-connectdevelop"></i> Conexiones</a></li>
          <li><a href="/" style="color:white;"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
        </ul>
      </nav>
      <hr>
@endsection