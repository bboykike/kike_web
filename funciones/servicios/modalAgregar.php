<div id="agregarServicio" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar Servicio</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="serviciosin_form" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cliente</label>
                                <select name="id_cliente" id="id_cliente" class="form-control select2">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="lista" class="form-group">
                                <label>Sucursal*</label>
                                <select name="id_sucursal" id="id_sucursal" class="form-control select2">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tipo de servicio*</label>
                                <input class="form-control" type="text" name="Tipo" id="Tipo" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Problema*</label>
                                <textarea class="form-control" id="Problema" name="Problema"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha del servicio*</label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy"
                                            id="datepicker-autoclose" name="FechaIn" required>
                                        <span class="input-group-addon bg-custom b-0"><i
                                                class="mdi mdi-calendar text-white"></i></span>
                                    </div><!-- input-group -->
                                </div>
                            </div>
                        </div>
                        <div class=col-md-4>
                            <div class="form-group">
                                <label>Hora del servicio</label>
                                <div class="input-group">
                                    <input name="hora" id="timepicker2" type="text" class="form-control" required>
                                    <span class="input-group-addon"><i class="mdi mdi-clock"></i></span>
                                </div>
                                <!-- input-group -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Empleado a asignar*</label>
                                <select name="id_empleado" id="id_empleado" class="form-control select2">
                                    <option value="0">Seleccione un empleado</option>
                                    <?php while($row = $resultado->fetch_assoc()) { ?>
                                    <option value="<?php echo $row['id_empleado']; ?>">
                                        <?php echo $row['nombre']; echo ' '; echo $row['apellido']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnguardarServicio"
                    class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>