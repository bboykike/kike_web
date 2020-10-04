$(document).ready(function() {
    $('#btnguardarEmpleado').click(function() {
        var datos = $('#empleados_form').serialize();
        $.ajax({
            type: "POST",
            url: "../funciones/empleados/addEmpleados.php",
            data: datos,
            success: function(r) {
                if (r == 1) {
                    $('#empleados_form')[0].reset();
                    $('#agregarEmpleado').modal('hide');
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'El serivicio se guardo con éxito',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {

                        setInterval(function() {
                            location.reload();
                        }, 900);

                    });

                } else {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'error',
                        title: 'Falla en el servidor, intente de nuevo',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
        });

        return false;
    });
})