<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ministerio de agricultira y tierra">

    <link rel="stylesheet" href="Vista/css/toastr.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <!--estilo de css -->
 <title>Eventos</title> 
</head> 
<body>

    <header class="container mb-2">
      
        <header class="row justify-content-between bg-success fixed-top blanco p-3">
              
              <p class="col-sm-12 col-md-6 col-lg-6"><img class="imgHeade mt-3" src=""></p>
              <p class="d-none col-sm-12 d-md-block col-md-3 col-lg-6"><img class="imgHeader float-right " src=""></p>
          
        </header>

    </header>
    <!-- fin del sintillo de la pagina-->


<nav class="navbar justify-content-center mt-5">
  <ul class="nav nav-pills row mt-4">
      <li class="nav-item ml-5">
      <a class="btn btn-danger ml-5" href="{{Route('login')}}">Iniciar sesión</a>
      </li>

  </ul>
</nav>
<!--final del menu de navegacion-->

  <!--card-->
<!--cominezan los eventos del sistema--> 
<section class="contaier mt-2 pt-3">
        <h2 class="display-4 text-center ">Eventos del ministerio</h2>
</section>

<section class="container d-flex flex-wrap mt-2 pt-3 ">
     @foreach ($eventos as $evento)

         <article class='col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-5'>
                      <!-- card numero uno-->
                      <div class='card'>
                        <img class='card-img-top img-responsive' src='{{asset($evento->file)}}' alt='card image cap'>
                        <div class='card-block p-3'>
                          <h4 class='card-title'>{{$evento->nombre}}</h4>
                          <p class='card-text'>Direccion: {{$evento->direccion}}</p>
                          <p class='card-text'>Fecha: {{$evento->apertura}}</p>
                           <p class='card-text'>Hora: {{$evento->hora}}</p>
                          <!--<a class='btn btn-primary'--> 

                                <!--buttom trigger modal-->
                              <button type='button' class='btn btn-success' data-toggle='modal' data-target='#{{$evento->slug}}'>ver mas información</button>

               <div class='modal face' id='{{$evento->slug}}' tabindex='-1' role='dialog' aria-labelledby='#exampleModallabel' aria-hidden='true'>
                        <div class='modal-dialog' role='document'>
                           <div class='modal-content'>
                              <div class='modal-header'>
                                 <h5 class='modal-title' id='#exampleModalLabel'></h5>
                                 <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                 </button>
                              </div>
                              <div class='modal-body'>
                                 <p>{{$evento->informacion}}</p>
                              </div>
                              <div class='modal-footer'>
                                 <button type='button' class='btn btn-success' data-dismiss='modal'>Cerrar</button>
                                 <!--<button type='button' class='btn btn-primary'>save changes</button>-->
                              </div>
                           </div>
                        </div>
                    </div>
    </article>
    @endforeach
</section>
  
<footer class="contaier-fluid mt-3 h-25 pb-5 bg-success">
    <p class="text-center">Derechos Recerbados</p>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  </body>
</html>