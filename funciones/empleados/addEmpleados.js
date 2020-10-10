// $(document).ready(function() {
//     $('#btnguardarEmpleado').click(function() {
//         var datos = $('#empleados_form').serialize();
//         $.ajax({
//             type: "POST",
//             url: "../funciones/empleados/addEmpleados.php",
//             data: datos,
//             success: function(r) {
//                 if (r == 1) {
//                     $('#empleados_form')[0].reset();
//                     $('#agregarEmpleado').modal('hide');
//                     Swal.fire({
//                         position: 'top-center',
//                         icon: 'success',
//                         title: 'El serivicio se guardo con éxito',
//                         showConfirmButton: false,
//                         timer: 1500
//                     }).then(function() {

//                         setInterval(function() {
//                             location.reload();
//                         }, 900);

//                     });

//                 } else {
//                     Swal.fire({
//                         position: 'top-center',
//                         icon: 'error',
//                         title: 'Falla en el servidor, intente de nuevo',
//                         showConfirmButton: false,
//                         timer: 1500
//                     });
//                 }
//             }
//         });

//         return false;
//     });
// })

$(document).ready(function () {
    $(".upload").on('click', function () {
        var formData = new FormData();
        var foto = $('#image')[0].files[0];
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var direccion = $('#direccion').val();
        var area = $('#area').val();
        var correo = $('#correo').val();

        formData.append('file', foto);
        formData.append('nombre', nombre);
        formData.append('apellido', apellido);
        formData.append('direccion', direccion);
        formData.append('area', area);
        formData.append('correo', correo);


        $.ajax({
            url: '../funciones/empleados/addEmpleados.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response != 0) {
                    $('#empleados_form')[0].reset();
                    $('#agregarEmpleado').modal('hide');
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'El empleado se guardo con éxito',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {

                        setInterval(function () {
                            location.reload();
                        }, 900);

                    });
                } else {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'error',
                        title: 'Error en el servidor, intente de nuevo',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {

                        setInterval(function () {
                            location.reload();
                        }, 900);

                    });
                }
            }
        });
        return false;
    });
});