@extends('egresado.layout')
@section('titulo')
    Lista de egresados
@endsection
@section('menu')
              <div class="box-shadow-for-ui">
                <div class="uou-block-2b">
                  <div class="container"> <a href="/inicio_egresado" class="logo"><img src="assets/images/logoupv.png" alt=""></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
                    <nav class="nav">
                      <ul class="sf-menu">
                          <li><a href="/inicio_egresado" style="color:white;"><i class="fa  fa-home"></i></a></li>
                          <li> <a href="/ofertas_trabajo" style="color:white;"><i class="fas fa-building"></i> Empresas</a> </li>
                          <li> <a href="/lista_egresados" style="color:white;"><i class="fas fa-user-tie"></i> Alumnos</a> </li>
                          <li> <a href="/perfil_egresado/{{auth()->user()->id}}" style="color:white;"><i class="fas fa-user"></i> Tu perfil</a></li>
                          <li><a href="/conexiones_egresado/{{auth()->user()->id}}" style="color:white;"><i class="fab fa-connectdevelop"></i> Conexiones</a></li>
                          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:white;"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          </form>
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
      {!! Form::open(['route' => 'students_upv', 'method' => 'GET']) !!}
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
                     <!-- <div class="field">
                          //Form::text('sort', null, ['list'=>'sort','placeholder' => 'Ordenar por']) }}
                            <datalist id="sort">
                              <option value="Nombre">
                              <option value="Carrera">
                              <option value="Matricula">
                            </datalist>
                        </div>-->
                      
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
      <div class="users">
      <section class="pro-mem">
        <div class="container pb30">
          <h3>Lista de Egresados</h3>
          <div class="row">
              {!! $students_upv->links()!!}
              @foreach ($students_upv as $student_upv)
              <div class="col-sm-3">
                <div class="uou-block-6a"> <img src="{{ asset($student_upv->image_url)}}" alt="{{$student_upv->first_name}}"  style="width:100%;max-width:275px;height:100%;max-height:200px;">
                  @if (auth()->user()->id != $student_upv->user_id)
                    <a href="/perfil_usuario/{{$student_upv->user_id}}"><h6>{{$student_upv->first_name}}</a> <span>Matrícula: {{$student_upv->university_id}}</span><span>Carrera: {{$student_upv->abbreviation}}</span></h6>
                  @else
                    <a href="/perfil_egresado/{{$student_upv->user_id}}"><h6>{{$student_upv->first_name}}</a> <span>Matrícula: {{$student_upv->university_id}}</span><span>Carrera: {{$student_upv->abbreviation}}</span></h6>
                  @endif
                  
                </div>
                <!-- end .uou-block-6a --> 
              </div> 
              @endforeach
              
              <div class="row"></div>
          </div>
        </div>
      </section>
      </div>
    </div>        
@endsection
@section('pie_pagina')
        <!-- Footer -->
      <div class="uou-block-4a secondary dark">
        <div class="container">
          <ul class="links">
            <p>Versión 1.0 - Enero 2019</p>
          </ul>
          <p>Desarollo: Equipo del M.S.I. Mario Humberto Rodríguez Chávez - Dirección de Tecnologías de la Información</p>
        </div>
      </div>
      <!-- end .uou-block-4a --> 
      
      <div class="uou-block-11a">
        <h5 class="title">Menu</h5>
        <a href="#" class="mobile-sidebar-close">&times;</a>
        <nav class="main-nav">
          <ul>
              <li><a href="/inicio_egresado" style="color:white;"><i class="fa  fa-home"></i> Inicio</a></li>
              <li> <a href="/ofertas_trabajo" style="color:white;"><i class="fas fa-building"></i> Empresas</a> </li>
              <li> <a href="/lista_egresados" style="color:white;"><i class="fas fa-user-graduate"></i> Egresados</a> </li>
              <li> <a href="/perfil_egresado/{{auth()->user()->id}}" style="color:white;"><i class="fas fa-user"></i> Tu perfil</a></li>
              <li><a href="/conexiones_egresado/{{auth()->user()->id}}" style="color:white;"><i class="fab fa-connectdevelop"></i> Conexiones</a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:white;"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>
          </ul>
        </nav>
        <hr>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).on("click",".pagination a", function(e){
            e.preventDefault();
            var url =$(this).attr('href').split('page=')[1];
            $.ajax({
              url:'lista_egresados/ajax?page='+url

            }).done(function(data){
              $('.col-sm-3').html(data);

            });
          });
        </script>-->
@endsection