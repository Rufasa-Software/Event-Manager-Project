
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
          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample{{$event->id}}" aria-expanded="false" aria-controls="multiCollapseExample{{$event->id}}">
            + info &nbsp &nbsp<i class="fas fa-chevron-down"></i>
          </button>
        </p>
        <div class="row hide-content">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample{{$event->id}}">
              <div class="card card-body card-description" id="card">
                <p>{{$event->id}}</p>
                <p>{{$event->description}}</p>
                <p>Plazas disponibles: {{$event->event_capacity}}</p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
  </div>
