<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portada</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <x-header>
        <ul class="nav nav-pills">
            <li id="login" class="nav-item"><a href="/login" id="link" class="nav-link text-decoration-none mr-3" aria-current="page">Login</a></li>
            <span id="bar" class="mt-xl-2 mt-md-1"></span>
            <li id="register" class="nav-item"><a href="/register" id="link" class="nav-link me-5 text-decoration-none">Register</a></li>
        </ul>
    </x-header>
    <main>
        <x-tabs-component />
        
        @foreach ($events as $event)
        {{-- <x-card-component /> --}}
        <div class="card mb-3 card-event">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{$event->event_image}}" class="img-fluid rounded-start" alt="Image of event">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$event->event_name}}</h5>
                  <p class="date-event">{{$event->event_date}}</p>
                  <button type="button" class="btn btn-primary btn-lg">Apuntarse</button>
                </div>
              </div>
            </div>
            <div class="collapse-container">
              <p class="collapse-description">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                  + info &nbsp &nbsp<i class="fas fa-chevron-down"></i>
                </button>
              </p>
              <div class="row">
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body card-description">
                      Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                      <p>Plazas disponibles: {{$event->event_capacity}}</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        @endforeach
     
    </main>
    <x-footer/>
    <script src="../js/app.js"></script>
</body>
</html>




{{-- <tr>
            <td>{{$event->id_event}}</td>
            <td>{{$event->event_name}}</td>
            <td>{{$event->event_date}}</td>
            <td>{{$event->event_image}}</td>
            <td>{{$event->event_capacity}}</td>
  
              
        </tr> --}}