<div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frminsert" onsubmit="return insertarDatos()" method="post" autocomplete="off">
          <label>Nombre Paciente</label>
          <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control form-control-sm" required="">
          <label>Apellido Paciente</label>
          <input type="text" id="apellido_paciente" name="apellido_paciente" class="form-control form-control-sm" required="">
          <label>Edad</label>
          <input type="text" id="edad_paciente" name="edad_paciente" class="form-control form-control-sm" required="">
          <label>Nombre del familiar</label>
          <input type="text" id="nom_fam_paciente" name="nom_fam_paciente" class="form-control form-control-sm" required="">
          <label>Causa</label>
          <input type="text" id="causa_paciente" name="causa_paciente" class="form-control form-control-sm" required="">
          <br>
          <input type="submit" value="Guardar" class="btn btn-dark">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>