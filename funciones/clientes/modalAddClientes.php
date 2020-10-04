<div id="agregarClientes" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Agregar Cliente</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="frm_clientes" autocomplete="off">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>RFC*</label>
                                <input class="form-control" type="text" name="RFC" id="RFC" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="lista" class="form-group">
                                <label>Nombre(s)*</label>
                                <input style="text-transform: capitalize;" class="form-control" type="text"
                                    name="NombreCliente" id="NombreCliente" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="lista" class="form-group">
                                <label>Apellido(s)*</label>
                                <input class="form-control" style="text-transform: capitalize;" type="text"
                                    name="ApellidoCliente" id="ApellidoCliente" required>

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
                                    name="Contacto" id="Contacto" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" style="text-transform: capitalize;" name="Telefono" id="Telefono"
                                    placeholder="" data-mask="(999) 999-9999" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Celular*</label>
                                <input type="text" name="Celular" id="Celular" placeholder="" data-mask="(999) 999-9999"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Estado*</label>
                                <input class="form-control" style="text-transform: capitalize;" type="text"
                                    name="Estado" id="Estado" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cuidad*</label>
                                <input class="form-control" style="text-transform: capitalize;" type="text"
                                    name="Cuidad" id="Cuidad" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Dirección*</label>
                                <input class="form-control" type="text" style="text-transform: capitalize;"
                                    name="Direccion" id="Direccion" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CP*</label>
                                <input class="form-control" type="number" name="Cp" id="Cp" required>
                            </div>
                            <script>
                            $(document).ready(function() {
                                $('input#Cp')
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
                                <input class="form-control" type="email" placeholder="ejemplo@gmail.com" name="Email"
                                    id="Email" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" id="Observaciones" name="Observaciones"></textarea>
                            </div>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnAddClientes"
                    class="btn btn-primary waves-effect waves-light">Guardar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>