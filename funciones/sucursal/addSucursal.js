$(document).ready(function() {

    $('#btnguardarSucursal').click(function() {
        var datos = $('#sucursal_form').serialize();
        $.ajax({
            type: "POST",
            url: "../funciones/sucursal/addSucursal.php",
            data: datos,
            success: function(r) {
                if (r == 1) {
                    $('#sucursal_form')[0].reset();
                    $('#agregarSucursal').modal('hide');
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'La sucursal se guardo con éxito',
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