@extends('layouts.plantillabase')

@section('contenido')

<a href="events/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">id_event</th>
        <th scope="col">event_name</th>
        <th scope="col">event_date</th>
        <th scope="col">event_image</th>
        <th scope="col">event_capacity</th>
      </tr>

    </thead>
    <tbody>
      @foreach ($events as $event)
      <tr>
          <td>{{$event->id_event}}</td>
          <td>{{$event->event_name}}</td>
          <td>{{$event->event_date}}</td>
          <td>{{$event->event_image}}</td>
          <td>{{$event->event_capacity}}</td>

            <a href="/events/{{$event->id_event}}/edit" class="btn btn-info">Editar</a>         
                @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection