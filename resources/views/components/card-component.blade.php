<div class="card mb-3" id="card-event">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{$event->event_image}}" class="img-fluid rounded-start" alt="Image of event">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$event->event_name}}</h5>
        <p class="date-event">{{$event->event_date}}</p>
        <div class="subscribe-div">
          <a class="d-flex justify-content-center align-content-center" href="{{ route('subscribe', ['id' => $event->id]) }}">Apuntarse</a>
        </div>
        
      </div>
    </div>
  </div>
  <div class="collapse-container">
    <p class="collapse-description">
      <button class="btn btn-primary" id="collapse{{$event->id}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$event->id}}" aria-expanded="false" aria-controls="multiCollapse{{$event->id}}">
      + info &nbsp &nbsp<i class="fas fa-chevron-down"></i></button>
    </p>
    <div class="hide-content">
      <div>
        <div class="col">
          <div class="collapse" id="collapse{{$event->id}}">
            <div class="card card-body card-description">
              <p>{{$event->event_description}}</p>
              <p>Plazas disponibles: {{$event->event_capacity}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>