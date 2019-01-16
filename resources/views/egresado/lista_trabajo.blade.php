@extends('egresado.layout')
@section('menu')
         <!-- Top Toolbar -->
         <div class="toolbar">
                <div class="uou-block-1a blog">
                  <div class="container">
                    <div class="search"> <a href="#" class="toggle fa fa-search"></a>
                      <form action="#">
                        <input type="text" class="search-input" placeholder="Search ...">
                        <input type="submit" value="">
                      </form>
                    </div>
            
                  </div>
                </div>
                <!-- end .uou-block-1a --> 
              </div>
              <!-- end toolbar -->
              
              <div class="box-shadow-for-ui">
                <div class="uou-block-2b">
                  <div class="container"> <a href="/principal_egresado" class="logo"><img src="assets/images/logoupv.png" alt=""></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
                    <nav class="nav">
                      <ul class="sf-menu">
                        <li><a href="/principal_egresado" style="color:white;"><i class="fa  fa-home"></i></a></li>
                        <li> <a href="/ofertas_trabajo" style="color:white;"><i class="fas fa-clipboard-list"></i> Lista de trabajos</a> </li>
                        <li> <a href="/perfil_egresado" style="color:white;"><i class="fas fa-user"></i> Tu perfil</a></li>
                        <li><a href="/conexiones_perfiles" style="color:white;"><i class="fab fa-connectdevelop"></i> Conexiones</a></li>
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
            <h2>Buscar Trabajos</h2>
          </div>
        </div>
      </div>
      
      <!-- search -->
      <div class="search-pro">
        <div class="map-search">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="map-toggleButton"> <i class="fa fa-bars"></i> </div>
                <div class="map-search-fields">
                  <!--div class="field">
                    <input type="text" placeholder="Keyword">
                  </div->
                  <div class="field">
                    <input type="text" placeholder="Location">
                  </div-->
                  <div class="field custom-select-box">
                    <input type="text" placeholder="Buscar empresa">
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
          <h3>Trabajos</h3>
          <div class="row">
            <div class="col-sm-3">
              <div class="uou-block-6a"> <img src="images/member-1.png" alt="">
                <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                <p><i class="fa fa-map-marker"></i> New York, USA</p>
              </div>
              <!-- end .uou-block-6a --> 
            </div>
            <div class="col-sm-3">
              <div class="uou-block-6a"> <img src="images/member-2.png" alt="">
                <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                <p><i class="fa fa-map-marker"></i> New York, USA</p>
              </div>
              <!-- end .uou-block-6a --> 
            </div>
            <div class="col-sm-3">
              <div class="uou-block-6a"> <img src="images/member-2.png" alt="">
                <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                <p><i class="fa fa-map-marker"></i> New York, USA</p>
              </div>
              <!-- end .uou-block-6a --> 
            </div>
            <div class="col-sm-3">
              <div class="uou-block-6a"> <img src="images/member-3.png" alt="">
                <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                <p><i class="fa fa-map-marker"></i> New York, USA</p>
              </div>
              <!-- end .uou-block-6a --> 
            </div>
            <div class="col-sm-3">
              <div class="uou-block-6a"> <img src="images/member-1.png" alt="">
                <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                <p><i class="fa fa-map-marker"></i> New York, USA</p>
              </div>
              <!-- end .uou-block-6a --> 
            </div>
            <div class="col-sm-3">
              <div class="uou-block-6a"> <img src="images/member-1.png" alt="">
                <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                <p><i class="fa fa-map-marker"></i> New York, USA</p>
              </div>
              <!-- end .uou-block-6a --> 
            </div>
            <div class="col-sm-3">
              <div class="uou-block-6a"> <img src="images/member-2.png" alt="">
                <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                <p><i class="fa fa-map-marker"></i> New York, USA</p>
              </div>
              <!-- end .uou-block-6a --> 
            </div>
            <div class="col-sm-3">
              <div class="uou-block-6a"> <img src="images/member-2.png" alt="">
                <h6>Jessica Walsh <span>Founder &amp; Web Designer</span></h6>
                <p><i class="fa fa-map-marker"></i> New York, USA</p>
              </div>
              <!-- end .uou-block-6a --> 
            </div>
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
            <li><a href="/principal">Inicio</a></li>
            <li> <a href="/ofertas_trabajo">Trabajos</a> </li>
            <li> <a href="/perfil_empresa">Perfil de la empresa</a></li>
            <li> <a href="/perfil_egresado">Tu perfil</a></li>
            <li><a href="/conexiones_perfiles">Conexiones</a></li>
          </ul>
        </nav>
        <hr>
@endsection