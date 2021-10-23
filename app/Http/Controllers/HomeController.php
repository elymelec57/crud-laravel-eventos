<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Evento;
use Illuminate\Support\Str;
use App\Http\Requests\StoreEventos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        $eventos = Evento::all();

        return view('eventos', compact('eventos'));
    }

    public function create(){

        return view('eventosCreate');
    }

    public function store(StoreEventos $request){

        $imagenes = $request->file('file')->store('public');
        $url = Storage::url($imagenes);
        $nombre = $request->nombre;
  
        $evento = new Evento();
        $evento->nombre = $nombre;
        $evento->slug = Str::slug($nombre, '-');
        $evento->direccion = $request->direccion;
        $evento->apertura = $request->apertura;
        $evento->clausura = $request->clausura;
        $evento->hora = $request->hora;
        $evento->file = $url;
        $evento->informacion = $request->informacion;
        $evento->save();
      
        return redirect()->route('home');
      }

      public function edit(Evento $evento){

        return view('eventosEdit', compact('evento'));
    }
  
    public function update(StoreEventos $request,Evento $evento){
  
      $imagenes = $request->file('file')->store('public');
  
      $url = Storage::url($imagenes);
      $nombre = $request->nombre;
      //$evento = new Evento();
  
      $evento->nombre = $nombre;
      $evento->nombre = $nombre;
      $evento->slug = Str::slug($nombre, '-');
      $evento->direccion = $request->direccion;
      $evento->apertura = $request->apertura;
      $evento->clausura = $request->clausura;
      $evento->hora = $request->hora;
      $evento->file = $url;
      $evento->informacion = $request->informacion;
      $evento->update();
  
      return redirect()->route('home');
    }

    public function destroy(Evento $evento){

        $evento->delete();

        return redirect()->route('home');
    }

}
