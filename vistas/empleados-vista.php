<meta charset="utf-8" />
<title>Tecesinf - Empleados</title>
<script src="<?php echo SERVERURL; ?>funciones/empleados/tableEmplados.js"></script>
<script src="<?php echo SERVERURL; ?>funciones/empleados/addEmpleados.js"></script>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Empleados</h4>
            <ol class="breadcrumb float-right">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-backdrop="static"
                    data-keyboard="false" data-toggle="modal" data-target="#agregarEmpleado"><i
                        class="fa fa-plus-circle"></i> Agregar Nuevo</button>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<!-- end row -->
<div class="row" id="tableContainer">
    <div class="col-12">
        <div class="card-box table-responsive">

            <table id="idTableEmpleados" class="table table-bordered">
                <thead>
                    <tr>
                        <td>Empleado</td>
                        <td>Dirección</td>
                        <td>Departamento</td>
                        <td>Correo</td>
                        <td>Estatus</td>
                        <td>Acciones</td>
                    </tr>

                <tbody>

                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
<!-- end row -->


<?php 
require_once "funciones/empleados/modalAgregar.php"; 
?>