<div>
  <h2>EDITAR EVENTOS</h2>

  <form action="/admin/{{$event->id}}/edit" method="POST">
    
      @csrf    
      @method('PUT')

      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="event_name" name="event_name" type="text" class="form-control" value="{{$event->event_name}}"/>    
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input id="event_date" name="event_date" type="date" class="form-control" value="{{$event->event_date}}"/>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="event_description" name="event_description" type="text" class="form-control" value="{{$event->event_description}}"/>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Imagen</label>
        <input id="event_image" name="event_image" type="url" class="form-control" value="{{$event->event_image}}"/>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Capacidad</label>
        <input id="event_capacity" name="event_capacity" type="number" class="form-control" value="{{$event->event_capacity}}"/>
      </div>

    <a href="/admin" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary" href="/admin">Guardar</button>
  </form>
</div>