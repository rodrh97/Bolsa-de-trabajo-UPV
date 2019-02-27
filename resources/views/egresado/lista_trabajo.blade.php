@extends('egresado.layout')
@section('titulo')
    Lista de trabajos
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
            <h2><i class="fas fa-clipboard-list"></i> Empresas</h2>
          </div>
        </div>
      </div>
      
      <!-- search -->
      <div class="search-pro">
        <div class="map-search">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                
                <div class="map-search-fields">
                  <div class="field">
                    <input type="text" placeholder="Buscar por habilidad">
                  </div>
                  <div class="field">
                    <input type="text" placeholder="Buscar por nombre">
                  </div>
                  <div class="field custom-select-box">
                    <input type="text" placeholder="Buscar por sector">
                  </div>
                </div>
                <div class="search-button">
                  <button>Buscar Trabajos</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Members -->
      <section class="pro-mem">
        <div class="container pb30">
          <h3>Lista de Empresas</h3>
          <div class="row">
            @foreach ($companies as $company)
              <div class="col-sm-3">
                <div class="uou-block-6a"> <img src="{{ asset($company->image_url)}}" alt="{{$company->name}}" style="width:100%;max-width:175px;height:100%;max-height:175px;">
                <a href="/egresado_perfil_empresa/{{$company->id}}"><h6><i class="fas fa-building"></i> {{$company->name}}</a></h6>
                <p><i class="fa fa-map-marker"></i> {{$company->city}}, {{$company->country}}</p>
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
@endsection