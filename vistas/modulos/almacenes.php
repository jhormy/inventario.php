<div class="content-wrapper">
  <section class="content-header">
    <h1>Gestión de Almacenes</h1>
  </section>

  <section class="content">
    <div class="box box-primary">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarAlmacen">
          Agregar almacén
        </button>
      </div>

      <div class="box-body">
        <table class="table table-bordered table-striped dt-responsive tablaAlmacenes" width="100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Ubicación</th>
              <th>Acciones</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </section>
</div>

<!-- Modal Agregar Almacén -->
<div id="modalAgregarAlmacen" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post">

        <div class="modal-header" style="background:#3c8dbc; color:white">
          <h4 class="modal-title">Agregar almacén</h4>
        </div>

        <div class="modal-body">
          <div class="box-body">

            <div class="form-group">
              <label>Nombre del almacén</label>
              <input type="text" class="form-control input-lg" name="nuevoAlmacen" required>
            </div>

            <div class="form-group">
              <label>Ubicación</label>
              <input type="text" class="form-control input-lg" name="ubicacionAlmacen">
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar almacén</button>
        </div>

        <?php
           $crearAlmacen = new ControladorAlmacenes();
           $crearAlmacen -> ctrCrearAlmacen(); // Aquí luego llamamos al controlador para guardar
        ?>

      </form>
    </div>
  </div>
</div>
