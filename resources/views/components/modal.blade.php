{{-- This is the form for the Create --}}
<form action="/admin" method="POST">
  @csrf
  <div class="formulario">
    {{-- Name of the event --}}
    <div class="mb-3">
      <input class="form-control" id="event_name" name="event_name" type="text" placeholder="Nombre del evento">
    </div>
    {{-- Date of the event --}}
    <div class="mb-3">
      <input class="form-control" id="event_date" name="event_date" type="date" placeholder="Fecha del evento">
    </div>
    {{-- Description of the event --}}
    <div class="mb-3">
      <input class="form-control" id="event_description" name="event_description" type="text" placeholder= "Descripción" tabindex="3">
    </div>
    {{-- Image of the event --}}
    <div class="mb-3">
      <input class="form-control" id="event_image" name="event_image" type="url" tabindex="4">
    </div>
    {{-- Capacity of the event --}}
    <div class="mb-3">
      <input class="form-control" id="event_capacity" name="event_capacity" type="number" placeholder="Capacidad" tabindex="4">
    </div>
    {{-- Buttons for cancel or save the form --}}
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a id="link_admin" href="{{ route('admin')}}">Cerrar</a></button>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>
  </div>
</form>

