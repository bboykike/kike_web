<?php 
      require "./funciones/conexion.php";
      $query = "SELECT id_empleado, nombre, apellido, estatus_empleado FROM empleados WHERE estatus_empleado='activo'";
      $resultado = $conexion->query($query);

      $consultaRol ="SELECT * FROM roles";
      $respues = $conexion->query($consultaRol);

?>
<meta charset="utf-8" />
<title>Tecesinf - Usuarios</title>
<script src="<?php echo SERVERURL; ?>funciones/usuarios/accionesQuery.js"></script>
<script src="<?php echo SERVERURL; ?>funciones/usuarios/table.js"></script>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Usuarios</h4>
            <ol class="breadcrumb float-right">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-backdrop="static"
                    data-keyboard="false" data-toggle="modal" data-target="#agregarUsuario"><i
                        class="fa fa-plus-circle"></i> Agregar Nuevo</button>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- end row -->
<div class="row" id="tableContainer">
    <div class="col-12">
        <div class="card-box table-responsive">

            <table id="idTableUsuarios" class="table table-bordered">
                <thead>
                    <tr>
                        <td>Usuario</td>
                        <td>Empleado</td>
                        <td>Rol</td>
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
require_once "funciones/usuarios/modalAgregar.php"; 
require_once "funciones/usuarios/modalEditar.php";
?>