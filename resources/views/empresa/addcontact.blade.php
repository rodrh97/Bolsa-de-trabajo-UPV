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
                <div class="col-md-12 ">
                    <ul class="nav nav-tabs">
                        <li class="active"><a><i class="fas fa-phone"></i> Añadir Contactos</a></li>
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

                    @foreach ($companies as $company)
                    <li class="row">
                      <h6 class="title col-xs-6">Localización</h6>
                      <span class="subtitle col-xs-6">{{$company->city}}, {{$company->country}}</span> </li><br>
                    <li class="row">
                      <h6 class="title col-xs-6">RFC</h6>
                      <span class="subtitle col-xs-6">{{$company->rfc}}</span> </li><br>
                    <li class="row">
                      <h6 class="title col-xs-6">Horario</h6>
                      <span class="subtitle col-xs-6">{{$company->schedule}}</span> </li><br>
                    <li class="row">
                      <h6 class="title col-xs-6">Telefono</h6>
                      <span class="subtitle col-xs-6">{{$company->phone}}</span> </li><br>
                    </li>
                    <li class="row">
                      <h6 class="title col-xs-6">Correo Electrónico</h6>
                      <span class="subtitle col-xs-6">{{$company->email}}</span> </li><br>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>
            
          </div>
          
          <!-- Tab Content -->
          <div class="col-md-8">
              <!-- Añadir Contactos -->
<div  class="tab-pane fade">
  <div class="form-row">
    <div class="form-group col-md-6">
    <h3>Añadir Contacto</h3>
    </div>
    </div>

      <div class="form-row">
      <div class="form-group col-md-12">
      <p>Aquí puedes agregar tus contactos</p>
      </div>
      </div>

      @foreach($companies as $company)
      <form method="POST"  action="/agregar_contacto/{{$company->id}}">
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
        
        <div class="form-row">
        <div class="form-group col-md-12">
        <center><button type="submit" class="btn btn-primary">Agregar Contacto</button></center>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-1">
        <center><a href="/perfil_empresa/{{$company->id}}"><button type="button" class="btn btn-secondary">Regresar Perfil</button></a></center>
        </div>
        </div>
        @endforeach
      </form>
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