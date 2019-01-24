@extends('empresa.layout')
@section('titulo')
    Perfil Empresa
@endsection
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
          <div class="container"> <a href="/inicio_empresa"><img src="assets/images/logoupv.png" alt="" width="200px" height="100px"></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
            <nav class="nav">
              <ul class="sf-menu">
                <li><a href="/inicio_egresado" style="color:white;"><i class="fa  fa-home"></i></a></li>
                <li> <a href="/ofertas_trabajo" style="color:white;"><i class="fas fa-clipboard-list"></i> Trabajos</a> </li>
                <li> <a href="/lista_egresados" style="color:white;"><i class="fas fa-user-graduate"></i> Egresados</a> </li>
                <li> <a href="/perfil_egresado" style="color:white;"><i class="fas fa-user"></i> Tu perfil</a></li>
                <li><a href="/conexiones_egresado" style="color:white;"><i class="fab fa-connectdevelop"></i> Conexiones</a></li>
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
          <h1>Empresa: Honda Motor Co. Ltd. <a data-toggle="tooltip" data-placement="top" title="Verified Member"><img src="images/icon-ver.png" alt="" ></a> </h1>
          <h6>Sector: Automotriz</h6>
          <p>Dirección: 7979 Leary Way Northeast
            Redmond, WA 98052  <!--a href="#.">map</a> / <a href="#.">street</a>)</p-->
          
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
          <div class="connect"> <a href="#." data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i> Conectar</a> <!--a href="#."><i class="fa fa-share-alt"></i> Share</a-->
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
              <li class="active"><a data-toggle="tab" href="#profile">Perfil</a></li>
              <li><a data-toggle="tab" href="#jobs">Trabajos</a></li>
              <li><a data-toggle="tab" href="#contact">Contacto</a></li>
            </ul>
          </div>
          
          <!-- SIDE BAR -->
          <div class="col-md-4"> 
            
            <!-- Company Information -->
            <div class="sidebar">
              <h5 class="main-title">Información de la Empresa</h5>
              <div class="sidebar-thumbnail"> <img src="images/honda.jpg" alt=""> </div>
              <div class="sidebar-information">
                <ul class="single-category">
                  <li class="row">
                    <h6 class="title col-xs-6">Sector</h6>
                    <span class="subtitle col-xs-6">Automotriz</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Localización</h6>
                    <span class="subtitle col-xs-6">Tokio, Japón</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">RFC</h6>
                    <span class="subtitle col-xs-6">HSD7589</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Horario</h6>
                    <span class="subtitle col-xs-6">10:00 AM - 5:00 PM</span> </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Telefono</h6>
                    <span class="subtitle col-xs-6">(834) 1234567</span> </li>
                  </li>
                  <li class="row">
                    <h6 class="title col-xs-6">Correo Electrónico</h6>
                    <span class="subtitle col-xs-6">honda@contact.com</span> </li>
                  </li>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus 
                      similique aliquidautem laudantium sapiente ad enim ipsa modi labo rum accusantium deleniti neque. </p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, nihil, dolores, culpa ullam vero ipsum placeat 
                      accusamus nemoitate id molestiae consectetur quae pariatur repudi andae vel ex quaerat nam iusto aliquid 
                      laborum quia adipisci aut ut imcati nisi deleniti tempore maxime sequi fugit reiciendis libero quo. Rerum
                      assumenda.</p>
                    
                    <!-- Video -->
                    <iframe src="https://www.youtube.com/embed/uVju5--RqtY"></iframe>
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
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Front-End Web Developer</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                          <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
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
                    <div class="listing-ver-3">
                      <div class="listing-heading">
                        <h5>Front-End Web Developer</h5>
                        <ul class="bookmark list-inline">
                          <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                          <li><a href="#"><i class="fa fa-eye"></i></a></li>
                          <li><a href="#"><i class="fa fa-share"></i></a></li>
                        </ul>
                      </div>
                      <div class="listing-inner">
                        <div class="listing-content">
                          <h6 class="title-company">Mars Planet Telecommunications Inc.</h6>
                          <span class="location"> <i class="fa fa-map-marker"></i> Manhattan, New york, USA </span> <span class="type-work full-time"> Full Time </span>
                          <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio pellentesque habitant morbi tristique senectus et netus et malesuada. <a href="single_job.html">read more</a></p>
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
                  </div>
                </div>
              </div>
              
              <!-- Contact -->
              <div id="contact" class="tab-pane fade">
                <div class="profile-main">
                  <h3>Contacta a la Empresa</h3>
                  <div class="profile-in">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate quis tenetur velit! Provident eum molestias aperiam suscipit distinctio ipsum cupiditate quasi, dolor sunt, cum reprehenderit quibusdam, repellendus eaque, quas magni.</p>
                    <form action="#">
                      <input type="text" placeholder="Nombre y Apellido">
                      <input type="text" placeholder="Tu correo electrónico">
                      <input type="text" placeholder="Tu numero telefónico">
                      <textarea placeholder="Tu mensaje"></textarea>
                      <button class="btn btn-primary">Enviar Mensaje</button>
                    </form>
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
            <li> <a href="/ofertas_trabajo" style="color:white;"><i class="fas fa-clipboard-list"></i> Trabajos</a> </li>
            <li> <a href="/lista_egresados" style="color:white;"><i class="fas fa-users"></i> Egresados</a> </li>
            <li> <a href="/perfil_egresado" style="color:white;"><i class="fas fa-user"></i> Tu perfil</a></li>
            <li><a href="/conexiones_egresado" style="color:white;"><i class="fab fa-connectdevelop"></i> Conexiones</a></li>
            <li><a href="/" style="color:white;"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
          </ul>
        </nav>
        <hr>
@endsection