<div id="agregarAccesorio" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar Cliente</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="frm_accesorio" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre Accesorio*</label>
                                <input class="form-control" type="text" name="Nombre" id="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="lista" class="form-group">
                                <label>Marca*</label>
                                <input style="text-transform: capitalize;" class="form-control" type="text" name="Marca"
                                    id="Marca" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Número de serie*</label>
                                <input class="form-control" type="text" style="text-transform: capitalize;"
                                    name="NoSerie" id="NoSerie" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Equipo*</label>
                                <select name="id_equipo" id="id_equipo" class="form-control select2" required>
                                </select>
                            </div>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnAddAccesorio"
                    class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>