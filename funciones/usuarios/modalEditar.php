<div id="EditarUsuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="usuario_form_update" autocomplete="off">
                    <div class="row">
                        <input style="display:none" type="text" id="id_usuario" name="id_usuario" class="text">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre de usuario*</label>
                                <input class="form-control" type="text" name="UserNameEdit" id="UserNameEdit" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Contraseña*</label>
                            <div class="input-group">
                                <input id="contraseniaEdit" name="contraseniaEdit" type="Password" Class="form-control"
                                    required>
                                <div class="input-group-append">
                                    <button id="show_password" class="btn btn-primary" type="button"
                                        onclick="mostrarPassword2();"> <span class="fa fa-eye-slash icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Empleado*</label>
                                <select name="id_empleadoEdit" id="id_empleadoEdit" class="form-control select2">
                                    <option value="0">Seleccione un empleado</option>
                                    <?php while($row = $resultado->fetch_assoc()) { ?>
                                    <option value="<?php echo $row['id_empleado']; ?>">
                                        <?php echo $row['nombre']; echo ' '; echo $row['apellido']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol*</label>
                                <select name="id_rol2" id="id_rol2" class="form-control select2">
                                    <option value="0">Seleccione un rol</option>
                                    <?php while($row = $respues->fetch_assoc()) { ?>
                                    <option value="<?php echo $row['id_rol']; ?>">
                                        <?php echo $row['Nombre']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnUpdate"
                    class="btn btn-primary waves-effect waves-light">Actualizar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>