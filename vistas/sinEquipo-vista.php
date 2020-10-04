<?php 
      require "./funciones/conexion.php";
      $query = "SELECT id_empleado, nombre, apellido, estatus_empleado FROM empleados WHERE estatus_empleado='activo'";
      $resultado = $conexion->query($query);

?>
<meta charset="utf-8" />
<title>Tecesinf - Servicios sin equipo</title>
<script src="<?php echo SERVERURL; ?>funciones/servicios/addServicio.js"></script>
<script src="<?php echo SERVERURL; ?>funciones/servicios/tableServiciosSE.js"></script>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Servicios Sin Equipo</h4>
            <ol class="breadcrumb float-right">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-backdrop="static"
                    data-keyboard="false" data-toggle="modal" data-target="#agregarServicio"><i
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

            <table id="idTableServiciosin" class="table table-bordered">
                <thead>
                    <tr>
                        <td>Folio</td>
                        <td>Tipo</td>
                        <td>Fecha Servicio</td>
                        <td>Empleado</td>
                        <td>Sucursal</td>
                        <td>Cliente</td>
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
require_once "funciones/servicios/modalAgregar.php"; 
?>