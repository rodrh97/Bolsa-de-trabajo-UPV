@extends('egresado.layout')
@section('titulo')
    Tus conexiones
@endsection
@section('menu')
              <div class="box-shadow-for-ui">
                <div class="uou-block-2b">
                  <div class="container"> <a href="/inicio_egresado" class="logo"><img src="/assets/images/logoupv.png" alt=""></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
                    <nav class="nav">
                      <ul class="sf-menu">
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
            <h2><i class="fab fa-connectdevelop"></i> Conexiones</h2>
          </div>
        </div>
      </div>
      
    
      <!-- Compny Profile -->
    
      <div class="compny-profile"> 
        
        <!-- Profile Company Content -->
        <div class="profile-company-content has-bg-image" data-bg-color="f5f5f5">
          <div class="container">
            <div class="row"> 
              
              <!-- SIDE BAR -->
              <div class="col-md-4"> 
                <!-- Company Information -->
                <div class="sidebar">
                  <h5 class="main-title">{{$users->first_name}} {{$users->last_name}}</h5>
                  <div class="sidebar-thumbnail"> <img src="{{ asset($users->image_url)}}" alt="" width="245px" height="220px"> </div>
                  <div class="sidebar-information">
                    <ul class="single-category">
                      <li class="row">
                        <h6 class="title col-xs-6">Matricula</h6>
                      <span class="subtitle col-xs-6">{{$users->university_id}}</span></li>
                  <li class="row">
                    <h6 class="title col-xs-6">Nombre Completo</h6>
                    <span class="subtitle col-xs-6">{{$users->first_name}} {{$users->last_name}} {{$users->second_last_name}}</span></li>
                  <li class="row">
                    <h6 class="title col-xs-6">Periodo Escolar</h6>
                    <span class="subtitle col-xs-6">2015-2018</span></li>
                  <li class="row">
                    <h6 class="title col-xs-6">Telefono</h6>
                    @foreach ($information as $info)
                    <span class="subtitle col-xs-6">{{$info->phone}}</span></li>
                    @endforeach
                  <li class="row">
                    <h6 class="title col-xs-6">Correo</h6>
                    <span class="subtitle col-xs-6"><a href="#.">{{$users->email}}</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <!-- Tab Content -->
              <div class="col-md-8">
                <div class="network">
                  <h4>Redes</h4>
                  
                  <!-- Nav Tabs -->
                  <ul class="nav nav-tabs">
                    <li  class="active"><a data-toggle="tab" href="#connec">Conexiones (202)</a></li>
                    <li><a data-toggle="tab" href="#flow">Seguidores (23)</a></li>
                    <li><a data-toggle="tab" href="#flowing">Siguiendo (100)</a></li>
                  </ul>
                  
                  <!-- Tab Content -->
                  <div class="tab-content"> 
                    
                    <!-- Connections -->
                    <div id="connec" class="tab-pane fade in active">
                      <div class="net-work-in"> 
                        
                        <!-- Filter -->
                        <div class="filter-flower">
                          <div class="row">
                            <div class="col-sm-7">
                              <ul>
                                <li><a href="#." class="active">Mostrar Todo</a></li>
                                <li><a href="#."><i class="fa fa-user"></i> Empresas</a></li>
                              </ul>
                            </div>
                            
                            <!-- Short -->
                            <div class="col-sm-5">
                              <select>
                                <option>Sort</option>
                                <option>Sort</option>
                                <option>Sort</option>
                                <option>Sort</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Members -->
                        <div class="main-mem"> 
                          
                          <!-- Head -->
                          <div class="head">
                            <div class="row">
                              <div class="col-sm-8">
                                <button><i class="fa fa-user-plus"></i>Seguir</button>
                                <button><i class="fa fa-trash"></i>Borrar Conexión</button>
                              </div>
                              <div class="col-sm-4">
                                <form>
                                  <input type="search" placeholder="Buscar">
                                  <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Tittle -->
                          <div class="tittle">
                            <ul class="row">
                              <li class="col-xs-4"> <span>Title</span> </li>
                              <li class="col-xs-3"> <span>Location</span> </li>
                              <li class="col-xs-3"> <span>Network</span> </li>
                              <li class="col-xs-2 n-p-r n-p-l"> <span>Connections</span> </li>
                            </ul>
                          </div>
                          
                          <!-- Tittle -->
                          <div class="folow-persons">
                            <ul>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row">
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox1-1" class="styled" type="checkbox">
                                      <label for="checkbox1-1"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox1-2" class="styled" type="checkbox">
                                      <label for="checkbox1-2"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox1-3" class="styled" type="checkbox">
                                      <label for="checkbox1-3"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox1-4" class="styled" type="checkbox">
                                      <label for="checkbox1-4"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox1-5" class="styled" type="checkbox">
                                      <label for="checkbox1-5"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox1-6" class="styled" type="checkbox">
                                      <label for="checkbox1-6"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox1-7" class="styled" type="checkbox">
                                      <label for="checkbox1-7"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Followers -->
                    <div id="flow" class="tab-pane fade">
                      <div class="net-work-in"> 
                        
                        <!-- Filter -->
                        <div class="filter-flower">
                          <div class="row">
                            <div class="col-sm-7">
                              <ul>
                                <li><a href="#." class="active">Show All</a></li>
                                <li><a href="#."><i class="fa fa-user"></i> Professionals</a></li>
                                <li><a href="#."><i class="fa fa-building-o"></i> Companies</a></li>
                              </ul>
                            </div>
                            
                            <!-- Short -->
                            <div class="col-sm-5">
                              <select>
                                <option>Sort</option>
                                <option>Sort</option>
                                <option>Sort</option>
                                <option>Sort</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Members -->
                        <div class="main-mem"> 
                          
                          <!-- Head -->
                          <div class="head">
                            <div class="row">
                              <div class="col-sm-8">
                                <button><i class="fa fa-user-plus"></i>Follow</button>
                                <button><i class="fa fa-trash"></i>Delete</button>
                              </div>
                              <div class="col-sm-4">
                                <form>
                                  <input type="search" placeholder="Search">
                                  <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Tittle -->
                          <div class="tittle">
                            <ul class="row">
                              <li class="col-xs-4"> <span>Title</span> </li>
                              <li class="col-xs-3"> <span>Location</span> </li>
                              <li class="col-xs-3"> <span>Network</span> </li>
                              <li class="col-xs-2 n-p-r n-p-l"> <span>Connections</span> </li>
                            </ul>
                          </div>
                          
                          <!-- Tittle -->
                          <div class="folow-persons">
                            <ul>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row">
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox2-1" class="styled" type="checkbox">
                                      <label for="checkbox2-1"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox2-2" class="styled" type="checkbox">
                                      <label for="checkbox2-2"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox2-3" class="styled" type="checkbox">
                                      <label for="checkbox2-3"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox2-4" class="styled" type="checkbox">
                                      <label for="checkbox2-4"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox2-5" class="styled" type="checkbox">
                                      <label for="checkbox2-5"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox2-6" class="styled" type="checkbox">
                                      <label for="checkbox2-6"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox2-7" class="styled" type="checkbox">
                                      <label for="checkbox2-7"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- Following -->
                    <div id="flowing" class="tab-pane fade">
                    <div class="net-work-in"> 
                        
                        <!-- Filter -->
                        <div class="filter-flower">
                          <div class="row">
                            <div class="col-sm-7">
                              <ul>
                                <li><a href="#." class="active">Show All</a></li>
                                <li><a href="#."><i class="fa fa-user"></i> Professionals</a></li>
                                <li><a href="#."><i class="fa fa-building-o"></i> Companies</a></li>
                              </ul>
                            </div>
                            
                            <!-- Short -->
                            <div class="col-sm-5">
                              <select>
                                <option>Sort</option>
                                <option>Sort</option>
                                <option>Sort</option>
                                <option>Sort</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Members -->
                        <div class="main-mem"> 
                          
                          <!-- Head -->
                          <div class="head">
                            <div class="row">
                              <div class="col-sm-8">
                                <button disabled><i class="fa fa-user-plus"></i>Follow</button>
                                <button disabled><i class="fa fa-trash"></i>Delete</button>
                              </div>
                              <div class="col-sm-4">
                                <form>
                                  <input type="search" placeholder="Search">
                                  <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Tittle -->
                          <div class="tittle">
                            <ul class="row">
                              <li class="col-xs-4"> <span>Title</span> </li>
                              <li class="col-xs-3"> <span>Location</span> </li>
                              <li class="col-xs-3"> <span>Network</span> </li>
                              <li class="col-xs-2 n-p-r n-p-l"> <span>Connections</span> </li>
                            </ul>
                          </div>
                          
                          <!-- Tittle -->
                          <div class="folow-persons">
                            <ul>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row">
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox3-1" class="styled" type="checkbox">
                                      <label for="checkbox3-1"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox3-2" class="styled" type="checkbox">
                                      <label for="checkbox3-2"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox3-3" class="styled" type="checkbox">
                                      <label for="checkbox3-3"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox3-4" class="styled" type="checkbox">
                                      <label for="checkbox3-4"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox3-5" class="styled" type="checkbox">
                                      <label for="checkbox3-5"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox3-6" class="styled" type="checkbox">
                                      <label for="checkbox3-6"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                              
                              <!-- MEMBER -->
                              <li>
                                <div class="row"> 
                                  <!-- Title -->
                                  <div class="col-xs-4"> 
                                    <!-- Check Box -->
                                    <div class="checkbox">
                                      <input id="checkbox3-7" class="styled" type="checkbox">
                                      <label for="checkbox3-7"></label>
                                    </div>
                                    <!-- Name -->
                                    <div class="fol-name">
                                      <div class="avatar"> <img src="images/sm-avatar.jpg" alt=""> </div>
                                      <h6>Collin Weiland</h6>
                                      <span>Web Developer</span> </div>
                                  </div>
                                  <!-- Location -->
                                  <div class="col-xs-3 n-p-r n-p-l"> <span>San Francisco, USA</span> </div>
                                  <!-- Network -->
                                  <div class="col-xs-3 n-p-r"> <span>21 Followers</span> <span>10 Following</span> </div>
                                  <!-- Connections -->
                                  <div class="col-xs-2 n-p-r n-p-l"> <span>31 Connections</span> </div>
                                </div>
                              </li>
                            </ul>
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
@endsection