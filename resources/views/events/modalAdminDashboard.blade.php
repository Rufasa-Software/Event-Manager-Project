<!-- Botón de activación, previene si clicas fuera se cierre la ventana-->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button> --}}

{{-- $('#code').on('shown.bs.modal', function (e) {
    // do something...
  }) --}} --}}

<!-- Vertically centered scrollable modal -->
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tech Event</h5>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
          </div>
          <div class="modal-body">
            <div class="mb-3">
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Evento">
            </div>

            <div class="mb-3">
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Fecha del evento">
             </div>

            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder= "Descripción del Evento"rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
</div>
  