<div>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Tech Event Manager</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
              </div>
              <div class="modal-body">
                <div class="mb-3">
                   <input id="event_name" name= "event_name" type="text" class="form-control" placeholder="Nombre del Evento" tabindex="1">
                </div>
    
                <div class="mb-3">
                    <input id="event_date" name= "event_date" type="date" class="form-control"  placeholder="Fecha del evento" tabindex="2">
                 </div>
    
                <div class="mb-3">
                    <textarea id="event_desciption" name="event_desciption" class="form-control" placeholder= "Descripción del Evento"rows="3" tabindex="3"></textarea>
                </div>
                  
                <div class="mb-3">
                    <label for="formFile" class="form-label">Adjuntar/Cambiar foto</label>
                    <input id="event_image" name="event_image" class="form-control" type="file" tabindex="4">
                  </div>

                  <div class="mb-3">
                    <input id="event_capacity" name=event_capacity" type="text" class="form-control"  placeholder="Capacidad del Evento"tabindex="4">
                 </div>
    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </div>
    </div>
</div>