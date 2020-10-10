<div id="agregarEquipo" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar Servicio</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="frm_equipo" autocomplete="off">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="lista" class="form-group">
                                <label>Sucursal*</label>
                                <select name="id_sucursales" id="id_sucursales" class="form-control select2">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipo de Equipo*</label>
                                <input type="text" style="text-transform: capitalize;" maxlength="25"
                                    class="form-control" id="TipoEquipo" name="TipoEquipo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Marca*</label>
                                <input class="form-control" maxlength="25" style="text-transform: capitalize;"
                                    type="text" name="Marca" id="Marca" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Modelo*</label>
                                <input class="form-control" maxlength="15" id="Modelo" name="Modelo" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Número de serie*</label>
                                <input class="form-control" maxlength="18" id="NoSerie" name="NoSerie" required>
                            </div>
                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnAddEquipo"
                    class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>