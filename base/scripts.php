<!-- jQuery  -->
<script src="<?php echo SERVERURL;?>archivos/plugins/switchery/switchery.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"
    type="text/javascript"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"
    type="text/javascript"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"
    type="text/javascript"></script>

<script src="<?php echo SERVERURL;?>archivos/assets/js/jquery.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/assets/js/tether.min.js"></script>
<!-- Tether for Bootstrap -->
<script src="<?php echo SERVERURL;?>archivos/assets/js/bootstrap.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/assets/js/metisMenu.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/assets/js/waves.js"></script>
<script src="<?php echo SERVERURL;?>archivos/assets/js/jquery.slimscroll.js"></script>

<!-- Counter js  -->
<script src="<?php echo SERVERURL; ?>archivos/plugins/waypoints/jquery.waypoints.min.js">
</script>
<script src="<?php echo SERVERURL;?>archivos/plugins/counterup/jquery.counterup.min.js"></script>

<!--C3 Chart-->
<script type="text/javascript" src="<?php echo SERVERURL;?>archivos/plugins/d3/d3.min.js"></script>
<script type="text/javascript" src="<?php echo SERVERURL;?>archivos/plugins/c3/c3.min.js"></script>

<!--Echart Chart-->
<script src="<?php echo SERVERURL;?>archivos/plugins/echart/echarts-all.js"></script>

<!-- Required datatable js -->
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Dashboard init -->
<script src="<?php echo SERVERURL;?>archivos/assets/pages/jquery.dashboard.js"></script>


<!-- Buttons examples -->
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Modal-Effect -->
<script src="<?php echo SERVERURL; ?>archivos/plugins/custombox/js/custombox.min.js"></script>
<script src="<?php echo SERVERURL; ?>archivos/plugins/custombox/js/legacy.min.js"></script>

<!-- App js -->
<script src="<?php echo SERVERURL;?>archivos/assets/js/jquery.core.js"></script>
<script src="<?php echo SERVERURL;?>archivos/assets/js/jquery.app.js"></script>

<!-- Sweet-Alert  -->
<script src="<?php echo SERVERURL;?>archivos/assets/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/select2/js/select2.min.js" type="text/javascript"></script>

<!-- plugin js -->
<script src="<?php echo SERVERURL;?>archivos/plugins/moment/moment.js"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Init js -->
<script src="<?php echo SERVERURL;?>archivos/assets/pages/jquery.form-pickers.init.js"></script>



<script src="<?php echo SERVERURL;?>archivos/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"
    type="text/javascript"></script>
<script src="<?php echo SERVERURL;?>archivos/plugins/autoNumeric/autoNumeric.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo SERVERURL;?>archivos/plugins/autocomplete/jquery.autocomplete.min.js">
</script>
<script type="text/javascript" src="<?php echo SERVERURL;?>archivos/plugins/autocomplete/countries.js"></script>
<script type="text/javascript" src="<?php echo SERVERURL;?>archivos/assets/pages/jquery.autocomplete.init.js"></script>

<!-- Init Js file -->
<script type="text/javascript" src="<?php echo SERVERURL;?>archivos/assets/pages/jquery.form-advanced.init.js"></script>



<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});
</script>