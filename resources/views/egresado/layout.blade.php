<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('titulo')</title>

<!-- Fonts Online -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="icon" href="../assets/images/upv.ico" type="image/x-icon" sizes="32x32">

<!-- Style Sheet -->
<link rel="stylesheet" href="/css/owl.carousel.css">
<link rel="stylesheet" href="/css/main-style.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/sweetalert/sweetalert.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="main-wrapper"> 
   @yield('menu')
   @yield('contenido')
</div>
@yield('pie_pagina')
<!-- Scripts --> 
<script src="https://maps.googleapis.com/maps/api/js"></script> 
<script src="/js/jquery-2.1.3.min.js"></script> 
<script src="/js/bootstrap.js"></script> 
<script src="/js/plugins/superfish.min.js"></script> 
<script src="/js/jquery.ui.min.js"></script> 
<script src="/js/plugins/rangeslider.min.js"></script> 
<script src="/js/plugins/jquery.flexslider-min.js"></script> 
<script src="/js/uou-accordions.js"></script> 
<script src="/js/uou-tabs.js"></script> 
<script src="/js/plugins/select2.min.js"></script> 
<script src="/js/owl.carousel.min.js"></script> 
<script src="/js/gmap3.min.js"></script> 
<script src="/js/scripts.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script src="/sweetalert/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>
