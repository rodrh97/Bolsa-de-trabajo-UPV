@extends('empresa.layout')
@section('titulo')
    Trabajo
@endsection
@section('menu')
      <div class="box-shadow-for-ui">
        <div class="uou-block-2b">
          <div class="container"> <a href="/inicio_empresa"><img src="assets/images/logoupv.png" alt="" width="200px" height="100px"></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
            <nav class="nav">
              <ul class="sf-menu">
                <li><a href="/inicio_empresa" style="color:white;"><i class="fa  fa-home"></i></a></li>
                <li> <a href="/tus_trabajos" style="color:white;"><i class="fas fa-clipboard-list"></i> Tus Trabajos</a> </li>
                <li> <a href="/egresados" style="color:white;"><i class="fas fa-user-graduate"></i> Egresados</a> </li>
                <li> <a href="/perfil_empresa" style="color:white;"><i class="fas fa-building"></i>  Tu perfil</a></li>
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
      <h2>Trabajo de ITI</h2>
    </div>
  </div>
</div>


<div class="blog-content pt60">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <article class="uou-block-7f blog-post-content">
          <img src="img/b-post-image.jpg" alt="">

          <div class="meta">
            <span class="time-ago">3 days ago</span>
            <span class="category">Posted in: <a href="#">Design</a></span>
            <a href="#" class="comments">12 Comments</a>
          </div>

          <h1><a href="#">Perspiciatis Sint Pariatur Velit Corrupti</a></h1>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
          Phasellus pharetra nulla ac diam.
           Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
           Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                       Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
                       Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
          </p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.
          Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>


          <div class="uou-share-story clearfix">
            <div class="row">
              <div class="col-sm-3">
                <h5 class="sidebar-title">Share This Story</h5>

              </div>
              <div class="col-sm-9 ">
                <div class="social-widget">
                  <div class="uou-block-4b">

                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>

                  </div> <!-- end .uou-block-4b -->
                </div> <!-- end social widget -->
              </div>
            </div>
          </div>


          <a class="btn btn-primary " href="#">Back To Blog List</a>

        </article> <!-- end .uou-block-7f -->


        <div class="uou-post-comment">
          <aside class="uou-block-14a">
            <h5 class="sidebar-title">Comments(<span>2</span>)</h5>
            <ul>
              <li>
                <article class="comment">
                  <img src="img/p-post-1.png" alt="">

                  <div>
                    <header>
                      <a href="#" class="user">Jessica Walsh -</a>

                      <span class="time-ago">May 13, 2015(11.25)</span>
                      <a href="#" class="reply">Reply</a>
                    </header>

                    <p>Veniam minus obcaecati, quos facere et quibusdam debitis iure voluptate libero voluptas dolorem praesentium rerum adipisci ad fuga, odio molestiae. Soluta quos vel pariatur nemo fugit repellat. nemo fugit repellat</p>
                  </div>
                </article>
              </li>


              <li>
                <article class="comment">
                  <img src="img/p-post-1.png" alt="">

                  <div>
                    <header>
                      <a href="#" class="user">Jessica Walsh -</a>

                      <span class="time-ago">May 13, 2015(11.25)</span>
                      <a href="#" class="reply">Reply</a>
                    </header>

                    <p>Veniam minus obcaecati, quos facere et quibusdam debitis iure voluptate libero voluptas dolorem praesentium rerum adipisci ad fuga, odio molestiae. Soluta quos vel pariatur nemo fugit repellat. nemo fugit repellat</p>
                  </div>
                </article>
              </li>

            </ul>
          </aside> <!-- end .uou-block-14a -->

          <h4>Join Conversation</h4>

          <div class="uou-post-comment-form">
            <form role= "form">
              <div class="row">
                <div class="col-sm-4">
                  <input type="text" placeholder="Name">
                </div>
                <div class="col-sm-4">
                  <input type="email" placeholder="E-mail">
                </div>
                <div class="col-sm-4">
                  <input type="text" placeholder="Website">
                </div>

                <div class="col-sm-12">
                  <textarea placeholder="Your comment"></textarea>
                </div>

                <div class="col-sm-12">
                  <button class="btn btn-primary">Add Comment</button>
                </div>

              </div> <!-- end row -->
            </form>
          </div>

        </div>






      </div> <!-- end grid layout -->

      <div class="col-md-3">
        <div class="uou-sidebar">

          <div class="search-widget">
            <form class="search-form-widget" action="#">
              <input type="text" class="search-input" placeholder="Search ...">
              <input type="submit" value="">
            </form>
          </div> <!-- end search-widget -->

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

            </div> <!-- end .uou-block-4b -->
          </div> <!-- end social widget -->

          <h5 class="sidebar-title">Popular Posts</h5>

          <div class="latest-post-widget">
            <div class="post-single">
              <img src="img/p-post-1.png" alt="">
              <p class="meta">January 12, 2015</p>
              <p class="meta">Design</p>
              <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>

            </div>

            <div class="post-single">
              <img src="img/p-post-2.png" alt="">
              <p class="meta">January 12, 2015</p>
              <p class="meta">Design</p>
              <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>

            </div>

            <div class="post-single">
              <img src="img/p-post-3.png" alt="">
              <p class="meta">January 12, 2015</p>
              <p class="meta">Design</p>
              <h6 class="post-title"><a href="#">Pariatur Vellit Corrupti Goes Into 2 Lines</a></h6>

            </div>
          </div> <!-- end latest-post-widget -->


          <h5 class="sidebar-title">Tag Cloud</h5>

          <div class="widget-tag">
            <div class="tag-cloud">
              <a class="btn btn-primary" href="#">User Experience</a>
              <a class="btn btn-primary" href="#">HTML 5</a>
              <a class="btn btn-primary" href="#">Css 3</a>
              <a class="btn btn-primary" href="#">web design</a>
              <a class="btn btn-primary" href="#">social media</a>
              <a class="btn btn-primary" href="#">web development</a>
              <a class="btn btn-primary" href="#">print design</a>
              <a class="btn btn-primary" href="#">e-commerce</a>
              <a class="btn btn-primary" href="#">java script</a>
            </div>

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


        </div> <!-- end uou-sidebar -->
      </div>

    </div> <!-- end row -->

  </div> <!-- edn cotainer -->

</div> <!-- end blog-content -->
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