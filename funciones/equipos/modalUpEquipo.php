<div id="UpEquipo" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar Servicio</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="frm_equipo_up" autocomplete="off">
                    <input type="text" style="display:none" id="id_e" name="id_e">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="lista" class="form-group">
                                <label>Sucursal*</label>
                                <select name="id_sucursal2" id="id_sucursal2" class="form-control select2">
                                    <?php while($row = $resultado->fetch_assoc()) { ?>
                                    <option value="<?php echo $row['id_sucursal']; ?>">
                                        <?php echo $row['Nombre']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipo de Equipo*</label>
                                <input type="text" style="text-transform: capitalize;" maxlength="25"
                                    class="form-control" id="TipoEquipo2" name="TipoEquipo2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Marca*</label>
                                <input class="form-control" maxlength="25" style="text-transform: capitalize;"
                                    type="text" name="Marca2" id="Marca2" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Modelo*</label>
                                <input class="form-control" maxlength="15" id="Modelo2" name="Modelo2" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Número de serie*</label>
                                <input class="form-control" maxlength="18" id="NoSerie2" name="NoSerie2" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label">
                                    <div class="toggle">
                                        <input id="estatusEquipo" onChange="cambiarValor3();" class="toggle-state"
                                            type="checkbox" name="check" value="check" />
                                        <div class="indicator"></div>
                                    </div>
                                    <div id="label_estatus4" name="label_estatus4" class="label-text">Estatus</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="text" style="display:none" id="estatus3" name="estatus3">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnUpEquipo" class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>