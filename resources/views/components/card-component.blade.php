<div class="card mb-3 text-white" id="card-event">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{$event->event_image}}" class="img-fluid rounded-start" alt="Image of event">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$event->event_name}}</h5>
        <p class="date-event">{{$event->event_date}}</p>
        <div class="subscribe-div d-flex">
          @auth
            @if (Route::is('index'))
              <a class="d-flex justify-content-center align-content-center" id='subscribe-btn' href="{{ route('subscribe', ['id' => $event->id]) }}">Apuntarse</a>  
            @endif
            @if (Route::is('home'))
              <a class="d-flex justify-content-center align-content-center" id='unsubscribe-btn' href="{{ route('unsubscribe', ['id' => $event->id]) }}">Desapuntarse</a>  
            @endif
            @if (Route::is('admin'))
            <div class="icons_group">
              <form action="{{ route('admin.destroy', $event->id) }}" method="POST">
                  <a href="/admin/{{$event->id}}/edit" class="far fa-edit"></a>         
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="far fa-trash-alt"></button>
              </form>
            </div>
            @endif
          @endauth
          @guest
            <a class="d-flex justify-content-center align-content-center" id='subscribe-btn' href="{{ route('subscribe', ['id' => $event->id]) }}">Apuntarse</a>
          @endguest
        </div>
      </div>
    </div>
  </div>
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