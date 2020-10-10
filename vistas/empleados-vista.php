<meta charset="utf-8" />
<title>Tecesinf - Empleados</title>
<script src="<?php echo SERVERURL; ?>funciones/empleados/tableEmplados.js"></script>
<script src="<?php echo SERVERURL; ?>funciones/empleados/addEmpleados.js"></script>
<script src="<?php echo SERVERURL; ?>funciones/empleados/upEmpleados.js"></script>


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
                        <td>Foto</td>
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
require_once "funciones/empleados/modalUpEmpleado.php";
?>

<style>
.label {
    display: inline-flex;
    align-items: center;
    cursor: pointer;
    color: #394a56;
}

.label-text {
    margin-left: 16px;
}

.toggle {
    isolation: isolate;
    position: relative;
    height: 30px;
    width: 60px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow:
        -8px -4px 8px 0px #ffffff,
        8px 4px 12px 0px #d1d9e6,
        4px 4px 4px 0px #d1d9e6 inset,
        -4px -4px 4px 0px #ffffff inset;
}

.toggle-state {
    display: none;
}

.indicator {
    height: 100%;
    width: 200%;
    background: #ecf0f3;
    border-radius: 15px;
    transform: translate3d(-75%, 0, 0);
    transition: transform 0.4s cubic-bezier(0.85, 0.05, 0.18, 1.35);
    box-shadow:
        -8px -4px 8px 0px #4BB543,
        8px 4px 12px 0px red;
}

.toggle-state:checked~.indicator {
    transform: translate3d(25%, 0, 0);
}
</style>