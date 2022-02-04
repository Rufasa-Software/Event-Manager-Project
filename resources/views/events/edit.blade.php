<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tech Event Manager Edit</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<main>
  
</main>
  <form action="/admin/{{$event->id}}" method="POST">
      @csrf    
      @method('PUT')

      <div class="formulario">

        <div class="mb-3">
          <input class="form-control" id="event_name" name="event_name" type="text" placeholder="Nombre del evento" value="{{$event->event_name}}">
        </div>
        
        <div class="mb-3">
          <input class="form-control" id="event_date" name="event_date" type="date" placeholder="Fecha del evento" value="{{$event->event_date}}">
        </div>
  
        <div class="mb-3">
          <input class="form-control" id="event_description" name="event_description" type="text" placeholder= "Descripción" value="{{$event->event_description}}" tabindex="3">
        </div>
  
        <div class="mb-3">
          <input class="form-control" id="event_image" name="event_image" type="url" value="{{$event->event_image}}" tabindex="4">
        </div>
  
        <div class="mb-3">
          <input class="form-control" id="event_capacity" name="event_capacity" type="number" placeholder="Capacidad" value="{{$event->event_capacity}}" tabindex="4">
        </div>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a id="link_admin" href="/admin">Cancelar</a></button>
          <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </div>
      </div>  
  </form>
</main>
