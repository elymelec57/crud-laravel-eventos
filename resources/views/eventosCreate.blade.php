@extends('layouts.plantillaAdmin')

@section('content')
    
<form action="{{Route('eventos.store')}}" class="container" method="POST" enctype="multipart/form-data"> 

    @csrf
    <h2 class="display-4 text-center">Registra tus evento</h2>

      <div class="row mt-3">
           <label class="col-lg-6 text-center"><p class="btn-success pt-2 pb-2">Titulo del evento</p>
             <input type="text"  name="nombre" id="titu" placeholder="Titulo" class="form-control" value="{{old('nombre')}}">
             @error('nombre')
             <br>
             <small>*{{$message}}</small>
             <br>
             @enderror
           </label> 
          
           <label class="col-lg-6 text-center"><p class="btn-success pt-2 pb-2">Dirección del evento</p>
             <input type="text"  name="direccion" id="lugar" placeholder="lugar" class="form-control" value="{{old('direccion')}}">
             @error('direccion')
             <br>
             <small>*{{$message}}</small>
             <br>
             @enderror
           </label> 
          
           <label class="col-lg-6 text-center"><p class="btn-success pt-2 pb-2">Fecha de apertura</p>
             <input type="date"  name="apertura" id="apertura" placeholder="Apertura" class="form-control" value="{{old('apertura')}}">
             @error('apertura')
             <br>
             <small>*{{$message}}</small>
             <br>
             @enderror
           </label>

           <label class="col-lg-6 text-center"><p class="btn-success pt-2 pb-2">Fecha de culminación</p>
             <input type="date"  name="clausura" id="culmi" placeholder="culminación" class="form-control" value="{{old('clausura')}}">
             @error('clausura')
             <br>
             <small>*{{$message}}</small>
             <br>
             @enderror
           </label>

           <label class="col-lg-6 text-center"><p class="btn-success pt-2 pb-2">Hora del evento</p>
             <input type="time"  name="hora" id="hora" placeholder="hora" class="form-control" value="{{old('hora')}}">
             @error('hora')
             <br>
             <small>*{{$message}}</small>
             <br>
             @enderror
           </label>

           <label class="col-lg-6 text-center"><p class="btn-success pt-2 pb-2">Imagen para el evento</p>
             <input type="file"  name="file" id="img" placeholder="Apertura" class="form-control" accept="image/*" value="{{old('file')}}">
             @error('file')
             <br>
             <small>*{{$message}}</small>
             <br>
             @enderror
           </label> 

           <label class="col-lg-12 text-center"><p class="btn-success pt-2 pb-2">Información extra del evento</p>
             <textarea type="text"  name="informacion" id="comentario" placeholder="" class="form-control" value="{{old('informacion')}}"></textarea>
             @error('informacion')
             <br>
             <small>*{{$message}}</small>
             <br>
             @enderror
           </label>
      </div>

      <div class="row justify-content-center mt-2">
          <button type="submit" id="enviarevento" class="btn btn-danger mb-3 ml-1">Crear</button>
          <button type="reset" id="limpiarevento" class="btn btn-danger mb-3 ml-1">Limpiar</button>
      </div>

  </form>
@endsection
