<meta charset="utf-8" />
<title>Tecesinf - Accesorios</title>
<script src="<?php echo SERVERURL ?>funciones/accesorios/tableAccesorios.js"></script>
<script src="<?php echo SERVERURL ?>funciones/accesorios/addAccesorio.js"></script>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Accesorios</h4>
            <ol class="breadcrumb float-right">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-backdrop="static"
                    data-keyboard="false" data-toggle="modal" data-target="#agregarAccesorio"><i
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

            <table id="idTableAccesorios" class="table table-bordered">
                <thead>
                    <tr>
                        <td>Equipo</td>
                        <td>Nombre Accesorio</td>
                        <td>Marca</td>
                        <td># Serie</td>
                        <td>Estatus</td>
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
require_once "funciones/accesorios/modalAddAccesorios.php";
?>