<div id="agregarUsuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="usuario_form" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre de usuario*</label>
                                <input class="form-control" type="text" name="UserName" id="UserName" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Contraseña</label>
                            <div class="input-group">
                                <input id="contrasenia" name="contrasenia" type="Password" Class="form-control"
                                    required>
                                <div class="input-group-append">
                                    <button id="show_password" class="btn btn-primary" type="button"
                                        onclick="mostrarPassword();"> <span class="fa fa-eye-slash icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Empleado</label>
                                <select name="id_empleado" id="id_empleado" class="form-control select2">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rol</label>
                                <select name="id_rol" id="id_rol" class="form-control select2">
                                </select>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnguardar" class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>