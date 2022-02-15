{{$slot}}
<div class="formulario">
  <div class="mb-3 mt-3">
    <label class="label">Nombre</label>
    <input class="form-control" id="event_name" name="event_name" type="text">
  </div>
  <div class="mb-3">
    <label class="label">Fecha</label>
    <input class="form-control" id="event_date" name="event_date" type="date">
  </div>
  <div class="mb-3">
    <label class="label">Descripción</label>
    <input class="form-control" id="event_description" name="event_description" type="text" tabindex="3">
  </div>
  <div class="mb-3">
    <label class="label">Imagen</label>
    <input class="form-control" id="event_image" name="event_image" type="url" tabindex="4">
  </div>
  <div class="mb-3">
    <label class="label">Capacidad</label>
    <input class="form-control" id="event_capacity" name="event_capacity" type="number" tabindex="4">
  </div>
  <div class="modal-footer d-flex">
    <button type="button" class="ml-3" data-bs-dismiss="modal"><a id="link_admin" href="{{ route('admin')}}">Cerrar</a></button>
    <button type="submit" tabindex="4">Guardar</button>
  </div>
</div>