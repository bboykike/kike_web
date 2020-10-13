<div id="agregarEmpleado" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar Servicio</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="empleados_form" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre*</label>
                                <input style="text-transform: capitalize;" class="form-control" type="text"
                                    name="nombre" id="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Apellido*</label>
                                <input style="text-transform: capitalize;" class="form-control" type="text"
                                    name="apellido" id="apellido" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección*</label>
                                <input style="text-transform: capitalize;" class="form-control" type="text"
                                    name="direccion" id="direccion" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Departamento*</label>
                                <select name="area" id="area" class="form-control select2" required>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Soporte">Soporte</option>
                                    <option value="Desarrollo">Desarrollo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input id="image" name="image" type="file" class="filestyle"
                                    data-iconname="fa fa-cloud-upload" data-buttonname="btn-secondary">
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnguardarEmpleado"
                    class="btn btn-primary waves-effect waves-light upload">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>