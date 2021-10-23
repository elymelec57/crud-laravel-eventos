@extends('layouts.plantillaAdmin')

@section('content')
<section class="contaier mt-3 pt-">
    <h2 class="display-4 text-center">Eventos</h2>
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
                
                        <div class='row mt-3'>

                          <div class='col col-lg-6 text-center'>

                           <button class="btn btn-success"> <a href="{{Route('eventos.edit',$evento)}}" class="text-white"> Editar</a></button>
                          </div>

                          <div class='col col-lg-6 text-center'>

                           <form action="{{Route('eventos.destroy', $evento)}}" method="POST">@csrf @method('delete') <button type="submit" class="btn btn-danger">Eliminar</button></form> 
                          </div>

                        </div>

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
</section
@endsection
