<div id="UpEmpleado" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar Servicio</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="empleados_form_up" autocomplete="off" enctype="multipart/form-data">
                    <input type="text" name="id_empleado" id="id_empleado">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre*</label>
                                <input class="form-control" type="text" name="nombre2" id="nombre2" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Apellido*</label>
                                <input class="form-control" type="text" name="apellido2" id="apellido2" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dirección*</label>
                                <input class="form-control" type="text" name="direccion2" id="direccion2" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Departamento*</label>
                                <select name="area2" id="area2" class="form-control select2" required>
                                    <option value="0">Selecciona un departamento</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Soporte">Soporte</option>
                                    <option value="Desarrollo">Desarrollo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Correo</label>
                                <input type="email" class="form-control" id="correo2" name="correo2"
                                    value="kikekc10@gmail.com">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Foto</label>
                                <input id="foto" name="foto" type="file" class="filestyle"
                                    data-iconname="fa fa-cloud-upload" data-buttonname="btn-secondary">
                            </div>
                        </div> -->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label">
                                    <div class="toggle">
                                        <input id="estatusEmpleado" onChange="cambiarValor5();" class="toggle-state"
                                            type="checkbox" name="check" value="check" />
                                        <div class="indicator"></div>
                                    </div>
                                    <div id="label_estatus5" name="label_estatus5" class="label-text">Estatus</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="text" style="display:none" id="estatus4" name="estatus4">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnUpEmpleado"
                    class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>