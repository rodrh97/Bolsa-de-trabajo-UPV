@extends('egresado.layout')
@section('titulo')
    Inicio Egresado
@endsection
@section('menu')
      <div class="box-shadow-for-ui">
        <div class="uou-block-2b">
          <div class="container"> <a href="/inicio_egresado"><img src="assets/images/logoupv.png" alt="" width="200px" height="100px"></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
            <nav class="nav">
              <ul class="sf-menu">
                <li><a href="/inicio_egresado" style="color:white;"><i class="fa  fa-home"></i></a></li>
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
          <h2><i class="fas fa-newspaper"></i> Ultimas novedades</h2>
        </div>
      </div>
    </div>
    
    <div class="blog-content pt60">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            @foreach ($jobs as $job)
            @if ($job->deleted==0)
            <article class="uou-block-7f"> <img src="{{$job->image_url}}" alt="" class="thumb">
              <div class="meta"> <span class="time-ago">{{$job->created_at}}</span> <span class="category">{{$job->company_name}}</span> <a href="#" class="comments">{{$job->sector_name}}</a> </div>
            <h1><a href="#">{{$job->name}}</a></h1>
            <p>{{$job->description}}</p>
              <a href="/vacante/{{$job->id}}" class="btn btn-small btn-primary">Ver Detalles</a> </article>
              @endif
              @endforeach
            <!-- end .uou-block-7f -->
            <!-- end .uou-block-7f -->
            <!-- end .uou-block-7f -->
            
            <div class="text-center pt20">
              <ul class="uou-paginatin list-unstyled">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="uou-sidebar">
              <div class="search-widget">
                <form class="search-form-widget" action="#">
                  <input type="text" class="search-input" placeholder="Search ...">
                  <input type="submit" value="">
                </form>
              </div>
              <!-- end search-widget -->
              
              <h5 class="sidebar-title">Categories</h5>
              <div class="list-widget">
                <ul>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Mulitmedia</a></li>
                  <li><a href="#">Offtopic</a></li>
                </ul>
              </div>
              <h5 class="sidebar-title">About Us</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
              <h5 class="sidebar-title">Connect With Us</h5>
              <div class="social-widget">
                <div class="uou-block-4b">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
                <!-- end .uou-block-4b --> 
              </div>
              <!-- end social widget -->
              
              <h5 class="sidebar-title">Popular Posts</h5>
              <div class="latest-post-widget">
                <div class="post-single"> <img src="img/p-post-1.png" alt="">
                  <p class="meta">January 12, 2015</p>
                  <p class="meta">Design</p>
                  <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>
                </div>
                <div class="post-single"> <img src="img/p-post-2.png" alt="">
                  <p class="meta">January 12, 2015</p>
                  <p class="meta">Design</p>
                  <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>
                </div>
                <div class="post-single"> <img src="img/p-post-3.png" alt="">
                  <p class="meta">January 12, 2015</p>
                  <p class="meta">Design</p>
                  <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>
                </div>
              </div>
              <!-- end latest-post-widget -->
              
              <h5 class="sidebar-title">Tag Cloud</h5>
              <div class="widget-tag">
                <div class="tag-cloud"> <a class="btn btn-primary" href="#">User Experience</a> <a class="btn btn-primary" href="#">HTML 5</a> <a class="btn btn-primary" href="#">Css 3</a> <a class="btn btn-primary" href="#">web design</a> <a class="btn btn-primary" href="#">social media</a> <a class="btn btn-primary" href="#">web development</a> <a class="btn btn-primary" href="#">print design</a> <a class="btn btn-primary" href="#">e-commerce</a> <a class="btn btn-primary" href="#">java script</a> </div>
              </div>
              <h5 class="sidebar-title">Archive</h5>
              <div class="list-widget">
                <ul>
                  <li><a href="#">May 2015</a></li>
                  <li><a href="#">April 2015</a></li>
                  <li><a href="#">July 2015</a></li>
                  <li><a href="#">Frbruary 2015</a></li>
                  <li><a href="#">January 2015</a></li>
                </ul>
              </div>
            </div>
            <!-- end uou-sidebar --> 
          </div>
        </div>
        <!-- end row --> 
        
      </div>
      <!-- edn cotainer --> 
      
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
              <li> <a href="/lista_egresados" style="color:white;"><i class="fas fa-user-tie"></i> Alumnos</a> </li>
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