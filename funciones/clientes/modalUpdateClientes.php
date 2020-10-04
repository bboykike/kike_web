<div id="updateClientes" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Editar Cliente</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="frm_clientes_up" autocomplete="off">
                    <input style="display:none" type="text" id="id_cliente" name="id_cliente">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>RFC*</label>
                                <input class="form-control" type="text" name="RFC2" id="RFC2" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="lista" class="form-group">
                                <label>Nombre(s)*</label>
                                <input style="text-transform: capitalize;" class="form-control" type="text"
                                    name="NombreCliente2" id="NombreCliente2" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="lista" class="form-group">
                                <label>Apellido(s)*</label>
                                <input class="form-control" style="text-transform: capitalize;" type=" text"
                                    name="ApellidoCliente2" id="ApellidoCliente2" required>

                                <!-- <select name="id_sucursal" id="id_sucursal" class="form-control select2">
                                </select> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Contacto*</label>
                                <input class="form-control" type="text" style="text-transform: capitalize;"
                                    name="Contacto2" id="Contacto2" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" name="Telefono2" id="Telefono2" placeholder=""
                                    data-mask="(999) 999-9999" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Celular*</label>
                                <input type="text" name="Celular2" id="Celular2" placeholder=""
                                    data-mask="(999) 999-9999" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Estado*</label>
                                <input class="form-control" style="text-transform: capitalize;" type="text"
                                    name="Estado2" id="Estado2" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cuidad*</label>
                                <input class="form-control" style="text-transform: capitalize;" type="text"
                                    name="Cuidad2" id="Cuidad2" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Dirección*</label>
                                <input class="form-control" type="text" style="text-transform: capitalize;"
                                    name="Direccion2" id="Direccion2" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CP*</label>
                                <input class="form-control" type="number" name="Cp2" id="Cp2" required>
                            </div>
                            <script>
                            $(document).ready(function() {
                                $('input#Cp2')
                                    .keypress(function(event) {
                                        if (event.which < 48 || event.which > 57 || this.value.length ===
                                            5) {
                                            return false;
                                        }
                                    });
                            });
                            </script>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label>Correo electronico*</label>
                                <input class="form-control" type="email" placeholder="ejemplo@gmail.com" name="Email2"
                                    id="Email2" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" id="Observaciones2" name="Observaciones2"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="label">
                                    <div class="toggle">
                                        <input id="estatus" onChange="cambiarValor();" class="toggle-state"
                                            type="checkbox" name="check" value="check" />
                                        <div class="indicator"></div>
                                    </div>
                                    <div id="label_estatus" name="label_estatus" class="label-text">Estatus</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="text" style="display:none" id="estatus2" name="estatus2">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnUpClientes"
                    class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>