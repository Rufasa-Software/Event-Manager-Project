<!-- <form action="/" method="POST">
  @csrf
  <div class="formulario">
    <div class="mb-3">
      <input class="form-control" id="event_name" name="event_name" type="text" placeholder="Nombre del evento">
    </div>

    <div class="mb-3">
    <input class="form-control" id="event_date" name="event_date" type="date" placeholder="Fecha del evento">
    </div>

    <div class="mb-3">
      <textarea class="form-control" id="event_desciption" name="event_desciption" placeholder= "Descripción del Evento"rows="3" tabindex="3"></textarea>
    </div>

    <div class="mb-3">
      <input class="form-control" id="event_image" name="event_image" type="url" tabindex="4">
    </div>

    <div class="mb-3">
      <input class="form-control" id="event_capacity" name="event_capacity" type="number" placeholder="Capacidad del Evento"tabindex="4">
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a id="link_admin" href="/admin">Cerrar</a></button>
      <button type="submit" class="btn btn-primary"><a id="link_admin" href="/admin">Guardar</a></button>
    </div>
  </div>
</form> -->

<form action="/admin" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="event_name" name="event_name" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="event_date" name="event_date" type="date" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="event_description" name="event_description" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="event_image" name="event_image" type="url" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Capacity</label>
    <input id="event_capacity" name="event_capacity" type="number" class="form-control" tabindex="3">
  </div>
  <a href="/admin" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

