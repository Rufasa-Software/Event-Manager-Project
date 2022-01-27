@extends('layouts.plantillabase')

@section('contenido')

<h2>CREAR EVENTOS</h2>

<form action="/events" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="event_name" name="event_name" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="event_date" name="event_date" type="date" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="event_description" name="event_description" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="event_img" name="event_img" type="url" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Capacidad</label>
    <input id="event_capacity" name="event_capacity" type="number" class="form-control" tabindex="3">
  </div>

  <a href="/events" class="btn btn-secondary" tabindex="5">Cerrar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection