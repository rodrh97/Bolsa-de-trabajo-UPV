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
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
<!--<script>
    $(document).ready(function(){
    
     function clear_icon()
     {
      $('#id_icon').html('');
      $('#post_title_icon').html('');
     }
    
     function fetch_data(page, university_id, abbreviation, sort)
     {
      $.ajax({
       url:"/lista_egresados?page="+page+"&university_id="+sort_by+"&abbreviation="+sort_type+"&sort="+sort,
       success:function(data)
       {
        $('tbody').html('');
        $('tbody').html(data);
       }
      })
     }
    
     $(document).on('keyup', '#university_id', function(){
      var query = $('#university_id').val();
      var column_name = $('#hidden_column_name').val();
      var sort_type = $('#hidden_sort_type').val();
      var page = $('#hidden_page').val();
      fetch_data(page, university_id, abbreviation, sorty);
     });
    
     $(document).on('click', '.sorting', function(){
      var column_name = $(this).data('column_name');
      var order_type = $(this).data('sorting_type');
      var reverse_order = '';
      if(order_type == 'asc')
      {
       $(this).data('sorting_type', 'desc');
       reverse_order = 'desc';
       clear_icon();
       $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
      }
      if(order_type == 'desc')
      {
       $(this).data('sorting_type', 'asc');
       reverse_order = 'asc';
       clear_icon
       $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
      }
      $('#hidden_column_name').val(column_name);
      $('#hidden_sort_type').val(reverse_order);
      var page = $('#hidden_page').val();
      var query = $('#serach').val();
      fetch_data(page, university_id, abbreviation, sort);
     });
    
     $(document).on('click', '.pagination a', function(event){
      event.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
      $('#hidden_page').val(page);
      var column_name = $('#hidden_column_name').val();
      var sort_type = $('#hidden_sort_type').val();
    
      var query = $('#university_id').val();
    
      $('li').removeClass('active');
            $(this).parent().addClass('active');
      fetch_data(page, university_id, abbreviation, sort);
     });
    
    });
    </script>-->
    