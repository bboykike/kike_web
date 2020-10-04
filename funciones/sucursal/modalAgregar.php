<div id="agregarSucursal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar sucursal</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="sucursal_form" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre*</label>
                                <input class="form-control" type="text" name="nombre" id="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="lista" class="form-group">
                                <label>Dirección*</label>
                                <input class="form-control" type="text" name="direccion" id="direccion" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Cliente*</label>
                                <select name="id_cliente2" id="id_cliente2" class="form-control select2">
                                </select>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnguardarSucursal"
                    class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>