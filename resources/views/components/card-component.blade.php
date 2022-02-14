{{-- Card --}}
<div class="card mb-3" id="card-event">
  <div class="row g-0">
    {{-- Image --}}
    <div class="col-md-4">
      <img src="{{$event->event_image}}" class="img-fluid rounded-start" alt="Image of event">
    </div>
    {{-- Body with it's name, date and buttons--}}
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$event->event_name}}</h5>
        <p class="date-event">{{$event->event_date}}</p>
        <div class="subscribe-div">
            <a class="d-flex justify-content-center align-content-center"href="{{ route('subscribe', ['id' => $event->id]) }}">Apuntarse</a>  
            {{-- {{-- <a class="d-flex justify-content-center align-content-center"href="{{ route('subscribe', ['id' => $event->id]) }}">Desapuntarse</a> -->  --}}
        </div>
      </div>
    </div>
  </div>
  {{-- Collapse accordion to show the description and the capacity --}}
  <div class="collapse-container">
    <p class="collapse-description"><button class="btn btn-primary" id="multiCollapse{{$event->id}}" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapse{{$event->id}}" aria-expanded="false" aria-controls="multiCollapse{{$event->id}}">+ info &nbsp &nbsp<i class="fas fa-chevron-down"></i></button></p>
    <div class="hide-content">
      <div class="col">
        <div class="collapse multi-collapse" id="multiCollapse{{$event->id}}">
          <div class="card card-body card-description" id="card">
            <p>{{$event->id}}</p>
            <p>{{$event->event_description}}</p>
            <p>Plazas disponibles: {{$event->event_capacity}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>