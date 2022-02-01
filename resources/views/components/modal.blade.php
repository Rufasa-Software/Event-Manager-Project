<form action="/admin" method="POST">
  @csrf
  <div class="formulario">
    <div class="mb-3">
      <input type="text" class="form-control" id="event_name" name="event_name" placeholder="Nombre del evento">
    </div>

    <div class="mb-3">
    <input type="date" class="form-control" id="event_date" name="event_date" placeholder="Fecha del evento">
    </div>

    <div class="mb-3">
      <textarea id="event_desciption" name="event_desciption" class="form-control" placeholder= "Descripción del Evento"rows="3" tabindex="3"></textarea>
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label"></label>
      <input id="event_image" name="event_image" class="form-control" type="url" tabindex="4">
    </div>

    <div class="mb-3">
      <input id="event_capacity" name="event_capacity" type="number" class="form-control"  placeholder="Capacidad del Evento"tabindex="4">
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a id="link_admin" href="/admin">Cerrar</a></button>
      <button type="submit" class="btn btn-primary"><a id="link_admin" href="/admin">Guardar</a></button>
    </div>
  </div>
</form>
