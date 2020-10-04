<div id="UpSucursal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Editar sucursal</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="sucursal_form_Up" autocomplete="off">
                    <input type="text" style="display:none" id="id_sucursal" name="id_sucursal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre*</label>
                                <input class="form-control" type="text" name="nombre2" id="nombre2" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="lista" class="form-group">
                                <label>Dirección*</label>
                                <input class="form-control" type="text" name="direccion2" id="direccion2" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Cliente*</label>
                                <select name="id_cliente3" id="id_cliente3" class="form-control select2">
                                    <?php while($row = $resultado->fetch_assoc()) { ?>
                                    <option value="<?php echo $row['id_cliente']; ?>">
                                        <?php echo $row['nombre_cliente']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label">
                                    <div class="toggle">
                                        <input id="estatus3" onChange="cambiarValor();" class="toggle-state"
                                            type="checkbox" name="check" value="check" />
                                        <div class="indicator"></div>
                                    </div>
                                    <div id="label_estatus2" name="label_estatus2" class="label-text">Estatus</div>
                                    <input type="text" style="display:none" id="es" name="es">
                                </label>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnUpSucursal"
                    class="btn btn-primary waves-effect waves-light">Actualizar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>