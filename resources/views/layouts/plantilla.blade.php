<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ministerio de agricultira y tierra">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
   <!--estilo de css -->
 <title>@yield('title')</title>
</head> 
<body>

    <header class="container mb-4">
      
        <header class="row justify-content-between bg-success fixed-top blanco p-3">
              
              <p class="col-sm-12 col-md-6 col-lg-6"><img class="imgHeade mt-3" src=""></p>
              <p class="d-none col-sm-12 d-md-block col-md-3 col-lg-6"><img class="imgHeader mt-3 mr-1 float-right " src=""></p>
          
        </header>

    </header>
    <!-- fin del sintillo de la pagina-->


 <div class="mb-5"><div class="row mb-5"></div></div>
<!--final del menu de navegacion-->

<!--final del menu de navegacion-->
@yield('content')
 


  <footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
        <p class="text-center">Derechos Recerbados</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/validaciones.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
  </body>
</html>