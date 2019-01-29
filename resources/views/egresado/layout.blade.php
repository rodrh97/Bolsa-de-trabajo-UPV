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
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!-- Required Jquery -->
<script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../bower_components/modernizr/js/css-scrollbars.js"></script>


<!-- i18next.min.js -->
<script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript"
        src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Select 2 js -->
<script type="text/javascript" src="../bower_components/select2/js/select2.full.min.js"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="../bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">


</script>
<script type="text/javascript" src="../bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/js/jquery.quicksearch.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/advance-elements/select2-custom.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>