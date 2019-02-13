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
          
          <!-- Nav Tabs -->
          <div class="col-md-12 ">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#profile"><i class="fas fa-building"></i> Perfil</a></li>
              <li><a data-toggle="tab" href="#jobs"><i class="fas fa-clipboard-list"></i> Vacantes</a></li>
              <li><a data-toggle="tab" href="#contacts"><i class="fas fa-address-book"></i> Contactos</a></li>
              <li><a data-toggle="tab" href="#addcontact"><i class="fas fa-phone"></i> Añadir Contactos</a></li>
              <li><a data-toggle="tab" href="#addjob"><i class="fas fa-suitcase"></i> Añadir Vacantes</a></li>
            </ul>
          </div>
          
          <!-- SIDE BAR -->
          <div class="col-md-4"> 
            
            <!-- Company Information -->
            <div class="sidebar">
              <h5 class="main-title">Información de la Empresa</h5>
              @foreach ($companies as $company)
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
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                        <h6 class="title-company">{{$job->company_name}}</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> {{$job->city}}, {{$job->state}}, {{$job->country}} </span> <span class="type-work full-time"> Full Time </span>
                        <p>{{$job->description}} <a href="single_job.html">read more</a></p>
                          <h6 class="title-tags">Habilidades requeridas:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>
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

                    @foreach ($jobs as $job)
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                      <h5>{{$job->name}}</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                        <h6 class="title-company">{{$job->company_name}}</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> {{$job->city}}, {{$job->state}}, {{$job->country}} </span> <span class="type-work full-time"> Full Time </span>
                        <p>{{$job->description}} <a href="single_job.html">read more</a></p>
                          <h6 class="title-tags">Habilidades requeridas:</h6>
                          <ul class="tags list-inline">
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Presta</a></li>
                            <li><a href="#">Sass</a></li>
                          </ul>
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


              <!-- Añadir Contactos -->
              <div id="addcontact" class="tab-pane fade">
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <h3>Añadir Contactos</h3>
                  </div>
                  </div>

                  

                    <div class="form-row">
                    <div class="form-group col-md-12">
                    <p>Aquí puedes agregar tus contactos</p>
                    </div>
                    </div>

                    @foreach($companies as $company)
                    <form method="POST"  action="/perfil_empresa/{{$company->id}}">
                      {{ csrf_field() }}
                      <div class="form-row">
                      <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Nombre" style="color:black" name="first_name" required>
                      </div>
                      <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Apellido Paterno" style="color:black" name="last_name" required>
                      </div>
                      <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Apellido Materno" style="color:black" name="second_last_name" required>
                      </div>
                      </div>
                      
                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <input class="form-control" type="email" placeholder="Correo Electrónico" style="color:black" name="email" required>
                      </div>
                      <div class="form-group col-md-6">
                      <input class="form-control" type="text" placeholder="Telefono" style="color:black" name="phone" required>
                      </div>
                      </div>
                      
                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <input class="form-control" type="text" placeholder="Posición en la empresa"  maxlength="1000" style="color:black" name="position">
                      </div>
                      <div class="form-group col-md-6">
                      <input class="form-control" type="hidden" placeholder="Nombre de la empresa" style="color:black" name="id_company" value="{{$company->id}}">
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-12">
                      <textarea class="form-control" type="text" placeholder="Horario del contacto" maxlength="500" style="color:black" name="schedule" required></textarea>
                      </div>
                      </div>
                      @endforeach

                      <div class="form-row"><div class="form-group col-md-6"><button type="submit" class="btn btn-primary">Agregar Contacto</button></div></div>
    
                    </form>
              </div>

              <div id="addjob" class="tab-pane fade">
                

                  <div class="form-row">
                  <div class="form-group col-md-6">
                  <h3>Añadir Vacantes</h3>
                  </div>
                  </div>

                  

                    <div class="form-row">
                    <div class="form-group col-md-12">
                    <p>Aquí puedes agregar tus vacantes</p>
                    </div>
                    </div>

                    @foreach($companies as $company)
                    <form method="POST"  action="/perfil_empresa/{{$company->id}}">
                    @endforeach
                      {{ csrf_field() }}
                      <div class="form-row">
                      <div class="form-group col-md-12">
                      <input class="form-control" type="text" placeholder="Nombre de la vacante" style="color:black" name="name" required>
                      </div>
                      </div>
                      
                      <div class="form-row">
                      <div class="form-group col-md-12">
                      <textarea class="form-control" type="text" placeholder="Descripción de la vacante" maxlength="1000" style="color:black" name="description" required></textarea>
                      </div>
                      </div>
                      
                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <input class="form-control" type="text" placeholder="Salario" style="color:black" name="salary">
                      </div>
                      <div class="form-group col-md-6">
                      <input class="form-control" type="text" placeholder="Tipo de vacante" style="color:black" name="job_type" required>
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Pais" style="color:black" name="country" required>
                      </div>
                      <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Estado" style="color:black" name="state" required>
                      </div>
                      <div class="form-group col-md-4">
                      <input class="form-control" type="text" placeholder="Ciudad" style="color:black" name="city" required>
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <input class="form-control" type="text" placeholder="Codigo Postal" style="color:black" name="zip" required>
                      </div>
                      <div class="form-group col-md-6">
                      <input class="form-control" type="text" placeholder="Colonia" style="color:black" name="colony" required>
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-12">
                      <input class="form-control" type="text" placeholder="Calle" style="color:black" name="street" required>
                      </div>
                      </div>

                      <div class="form-row">
                      <div class="form-group col-md-6">
                      <input class="form-control" type="text" name="sector_name" placeholder="Sector" list="sector_names" style="color:black" required>
                      <datalist id="sector_names">
                        @foreach ($sectors as $sector)
                         <option value="{{$sector->name}}">
                        @endforeach
                      </datalist>
                      </div>
                      <div class="form-group col-md-6">
                      @foreach ($companies as $company)
                      <input class="form-control" type="text" name="company_name" placeholder="Compañia" list="company_names" style="color:black" value="{{$company->name}}" readonly>
                      @endforeach
                      </div>
                      </div>

                      <div class="form-row"><div class="form-group col-md-6"><button type="submit" class="btn btn-primary">Agregar Vacante</button></div></div>
    
                    </form>
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