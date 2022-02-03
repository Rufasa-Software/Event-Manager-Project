<form action="/admin" method="POST">
  @csrf
  <div class="formulario">
    <div class="mb-3">
      <input class="form-control" id="event_name" name="event_name" type="text" placeholder="Nombre del evento">
    </div>

    <div class="mb-3">
      <input class="form-control" id="event_date" name="event_date" type="date" placeholder="Fecha del evento">
    </div>

    <div class="mb-3">
      <input class="form-control" id="event_description" name="event_description" type="text" placeholder= "Descripción" tabindex="3">
    </div>

    <div class="mb-3">
      <input class="form-control" id="event_image" name="event_image" type="url" tabindex="4">
    </div>

    <div class="mb-3">
      <input class="form-control" id="event_capacity" name="event_capacity" type="number" placeholder="Capacidad" tabindex="4">
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a id="link_admin" href="/admin">Cerrar</a></button>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>
  </div>
</form>

