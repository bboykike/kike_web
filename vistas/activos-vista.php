<meta charset="utf-8" />
<title>Tecesinf - Activos</title>
<link href='../archivos/fullcalendar/main.css' rel='stylesheet' />
<script src='../archivos/fullcalendar/main.js'></script>
<script src="../funciones/fullcalendar/external-events.js"></script>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Agenda</h4>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <div class="row">
                <div class="col-md-3">
                    <!-- <a href="#" data-toggle="modal" data-target="#add-category"
                        class="btn btn-lg btn-primary btn-block waves-effect m-t-20 waves-light">
                        <i class="fa fa-plus"></i> Create New
                    </a> -->
                    <h3>Estatus</h3>
                    <div id="external-events" class="m-t-20">
                        <br>
                        <div class="external-event bg-success" data-class="bg-success">
                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Activos
                        </div>
                        <div class="external-event bg-danger" data-class="bg-info">
                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Finalizados
                        </div>
                    </div>

                </div>
                <!-- end col-->
                <div class="col-md-9">
                    <div id="calendar"></div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>



    </div>
    <!-- end col-12 -->
</div>