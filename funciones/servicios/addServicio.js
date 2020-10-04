$(document).ready(function() {
    // formSubmit()
    $('#btnguardarServicio').click(function() {
        var datos = $('#serviciosin_form').serialize();
        $.ajax({
            type: "POST",
            url: "../funciones/servicios/addServicio.php",
            data: datos,
            success: function(r) {
                if (r == 1) {
                    $('#serviciosin_form')[0].reset();
                    $('#agregarServicio').modal('hide');
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'El serivicio se guardo con éxito',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        $.ajax({
                            type: "POST",
                            url: "../funciones/servicios/correos.php"
                        });

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


// function formSubmit() {

//     $('#serviciosin_form').submit(function(e) {
//         e.preventDefault()

//         var Tipo = $('#Tipo').val()
//         var FechaIn = $('#FechaIn').val()
//         var Problema = $('#Problema').val()
//         var id_empleado = $('#id_empleado').val()
//         var id_cliente = $('#id_cliente').val();



//         var data = 'Tipo=' + Tipo + '&FechaIn=' + FechaIn + '&Problema=' + Problema + '&id_empleado=' + id_empleado + '&id_cliente=' + id_cliente;

//         if (Tipo == "" || FechaIn == "" || Problema == "") {
//             Swal.fire({
//                 position: 'top-center',
//                 icon: 'error',
//                 title: 'No se permite campos vacios',
//                 showConfirmButton: false,
//                 timer: 1500
//             })
//         } else {
//             $.ajax({
//                 url: '../funciones/servicios/addServicio.php',
//                 type: 'POST',
//                 data: data,
//                 beforeSend: function() {
//                     // document.getElementById("insert").disabled=true;
//                     // document.getElementById("insert").className = "btn btn-primary kt-spinner kt-spinner--right kt-spinner--md kt-spinner--light";
//                 },
//                 success: function(response) {
//                     // console.log(response)
//                     $('#serviciosin_form')[0].reset()
//                     $('#serviciosin_form').modal('hide')
//                     Swal.fire({
//                         position: 'top-center',
//                         icon: 'success',
//                         title: 'El servicio se guardo con éxito',
//                         showConfirmButton: false,
//                         timer: 1500
//                     }).then(function() {
//                         setInterval(function() {
//                             location.reload();
//                         }, 900);

//                     });
//                 },
//                 error: function(xhr, status, err) {
//                     Swal.fire({
//                         position: 'top-center',
//                         icon: 'error',
//                         title: 'Problemas en el servidor, intente de nuevo',
//                         showConfirmButton: false,
//                         timer: 1500
//                     })
//                 }
//             })
//         }


//     })
// }