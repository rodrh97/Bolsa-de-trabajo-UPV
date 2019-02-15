@extends('empresa.layout')
@section('titulo')
    Perfil Empresa
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
<div class="compny-profile"> 
    <!-- SUB Banner -->
    <div class="profile-bnr">
      <div class="container"> 
        <!-- User Iinfo -->
        <div class="user-info">
          @foreach ($companies as $company)
        <h1><i class="fas fa-building"></i> {{$company->name}} <a data-toggle="tooltip" data-placement="top" title="Verified Member"><img src="/images/icon-ver.png" alt="" ></a> </h1>
          <h6>Sector: Automotriz</h6>
          <p>Dirección: {{$company->street}}, {{$company->state}} {{$company->zip}}  <!--a href="#.">map</a> / <a href="#.">street</a>)</p-->
          @endforeach
          <!-- Social Icon -->
          <!--div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-google"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> </div-->
          
          <!-- Stars -->
          <ul class="row">
            <li class="col-sm-6">
              <!--div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span>(06)</span> </div-->
            </li>
            <li class="col-sm-6">
              <!--p><i class="fa fa-bookmark-o"></i> 28 Bookmarks</p-->
            </li>
          </ul>
          
          <!-- Followers -->
          <div class="followr">
            <ul class="row">
              <li class="col-sm-6">
                <p>Seguidores <span>(31)</span></p>
              </li>
              <li class="col-sm-6">
                <p>Siguiendo <span>(38)</span></p>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Top Riht Button -->
        <div class="right-top-bnr">
          <!--div class="connect"> <a href="#." data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Conectar</a--> <!--a href="#."><i class="fa fa-share-alt"></i> Share</a-->
            <div class="bt-ns"> <!--a href="#."><i class="fa fa-bookmark-o"></i> </a> <a href="#."><i class="fa fa-envelope-o"></i> </a> <a href="#."><i class="fa fa-exclamation"></i> </a--> </div>
          </div>
        </div>
      </div>
      
      <!-- Modal POPUP -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="container">
              <h6><a class="close" href="#." data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a> Send Message</h6>
              
              <!-- Forms -->
              <form action="#">
                <ul class="row">
                  <li class="col-xs-6">
                    <input type="text" placeholder="First Name ">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Last Name">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Country">
                  </li>
                  <li class="col-xs-6">
                    <input type="text" placeholder="Email">
                  </li>
                  <li class="col-xs-12">
                    <textarea placeholder="Your Message"></textarea>
                  </li>
                  <li class="col-xs-12">
                    <button class="btn btn-primary">Send message</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Profile Company Content -->
    <div class="profile-company-content main-user" data-bg-color="f5f5f5">
      <div class="container">
        <div class="row"> 
          @foreach ($companies as $company)
          <!-- Nav Tabs -->
          <div class="col-md-12 ">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#profile"><i class="fas fa-building"></i> Perfil</a></li>
              <li><a data-toggle="tab" href="#jobs"><i class="fas fa-clipboard-list"></i> Vacantes</a></li>
              <li><a data-toggle="tab" href="#contacts"><i class="fas fa-address-book"></i> Contactos</a></li>
              <li><a href="/agregar_vacante/{{$company->id}}"><i class="fas fa-suitcase"></i> Añadir Vacantes</a></li>
              <li><a href="/agregar_contacto/{{$company->id}}"><i class="fas fa-phone"></i> Añadir Contactos</a></li>
            </ul>
          </div>
          
          <!-- SIDE BAR -->
          <div class="col-md-4"> 
            
            <!-- Company Information -->
            <div class="sidebar">
              <h5 class="main-title">Información de la Empresa</h5>
              
              <div class="sidebar-thumbnail"> <img src="{{asset($company->image_url)}}" alt=""  width="251px" height="181px"> </div>
              @endforeach
              <div class="sidebar-information">
                <ul class="single-category">
                  <li class="row">
                    <h6 class="title col-xs-6">Sector</h6>
                    @foreach ($sectors as $sector)
                      <span class="subtitle col-xs-6">{{$sector->name}}</span> </li>
                    @endforeach
                    @foreach ($companies as $company)
                    <li class="row">
                      <h6 class="title col-xs-6">Localización</h6>
                      <span class="subtitle col-xs-6">{{$company->city}}, {{$company->country}}</span> </li>
                    <li class="row">
                      <h6 class="title col-xs-6">RFC</h6>
                      <span class="subtitle col-xs-6">{{$company->rfc}}</span> </li>
                    <li class="row">
                      <h6 class="title col-xs-6">Horario</h6>
                      <span class="subtitle col-xs-6">{{$company->schedule}}</span> </li>
                    <li class="row">
                      <h6 class="title col-xs-6">Telefono</h6>
                      <span class="subtitle col-xs-6">{{$company->phone}}</span> </li>
                    </li>
                    <li class="row">
                      <h6 class="title col-xs-6">Correo Electrónico</h6>
                      <span class="subtitle col-xs-6">{{$company->email}}</span> </li>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>
            
          </div>
          
          <!-- Tab Content -->
          <div class="col-md-8">
            <div class="tab-content"> 
              
              <!-- PROFILE -->
              <div id="profile" class="tab-pane fade in active">
                <div class="profile-main">
                  <h3>Descripción general</h3>
                  <div class="profile-in">
                    @foreach ($companies as $company)
                      <p>{{$company->description}}</p>
                    @endforeach  
                    <!-- Video -->
                    <!--<iframe src="https://www.youtube.com/embed/uVju5--RqtY"></iframe>-->
                  </div>
                </div>
                
                
              </div>
              
              <!-- Jobs -->
              <div id="jobs" class="tab-pane fade">
                <div class="header-listing">
                  <h6>Listado por</h6>
                  <div class="custom-select-box">
                    <select name="order" class="custom-select">
                      <option value="0">Más popular</option>
                      <option value="1">Ultimos en subir</option>
                      <option value="2">Mejor Calificado</option>
                    </select>
                  </div>
                  <ul class="listing-views">
                    <li class="active"><a href="#"><i class="fa fa-list"></i></a></li>
                    <li><a href="#"><i class="fa fa-th"></i></a></li>
                    <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                  </ul>
                </div>
                <div class="listing listing-1">
                  <div class="listing-section">
                    
                    @foreach ($jobs as $job)
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                      <h5>{{$job->name}}</h5>
                        <ul class="bookmark list-inline">
                        <form method="POST"  action="/perfil_empresa/{{$job->id}}" >
                          {{method_field('PATCH')}}  
                          {{ csrf_field() }}
                          @if ($job->deleted==0)
                            <li><a href="#"><button type="submit" class="btn" name="post" value="1" style="background-color:royalblue;"><i class="fas fa-eye"></i> Estado Publicado</button></a></li>
                          @else
                            <li><a href="#"><button type="submit" class="btn" name="post" value="0" style="background-color:red;"><i class="fas fa-eye"></i> Estado No Publicado</button></a></li>
                          @endif
                        </form> 
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                        <h6 class="title-company">{{$job->company_name}}</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> {{$job->city}}, {{$job->state}}, {{$job->country}} </span> <span class="type-work full-time"> Full Time </span>
                        <p>Descripción: {{$job->description}}</p>
                        <p>Salario: {{$job->salary}}</p>
                        <p><a href="/editar_vacante/{{$job->id}}"><i class="fas fa-edit"></i> Editar</a></p>
                          <!--<h6 class="title-tags">Habilidades requeridas:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>-->
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
                          <li><a href="#"><i class="fa fa-envelope"></i> honda@contact.com</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> 012 345 678</a></li>
                        </ul>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              <!--Contactos-->
              <div id="contacts" class="tab-pane fade">
                <div class="header-listing">
                  <h6>Contactos por</h6>
                  <div class="custom-select-box">
                    <select name="order" class="custom-select">
                      <option value="0">Más popular</option>
                      <option value="1">Ultimos en subir</option>
                      <option value="2">Mejor Calificado</option>
                    </select>
                  </div>
                  <ul class="listing-views">
                    <li class="active"><a href="#"><i class="fa fa-list"></i></a></li>
                    <li><a href="#"><i class="fa fa-th"></i></a></li>
                    <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                  </ul>
                </div>
                <div class="listing listing-1">
                  <div class="listing-section">

                    @foreach ($contacts as $contact)
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                      <h5>{{$contact->first_name}} {{$contact->last_name}} {{$contact->second_last_name}}</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                        <h6 class="title-company">{{$contact->position}}</h6>
                          <span>Horario: {{$contact->schedule}} </span>
                          <p><a href="/editar_contacto/{{$contact->id}}"><i class="fas fa-edit"></i> Editar</a></p>
                          
                        </div>
                      </div>
                      <div class="listing-tabs">
                        <ul>
                          <li><a href="#"><i class="fa fa-envelope"></i> {{$contact->email}}</a></li>
                          <li><a href="#"><i class="fa fa-phone"></i> {{$contact->phone}}</a></li>
                        </ul>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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