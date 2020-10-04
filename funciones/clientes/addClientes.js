$(document).ready(function() {
    $("#btnAddClientes").click(function() {
        var rfc = $("#RFC").val();
        var NombreCliente = $("#NombreCliente").val();
        var ApellidoCliente = $("#ApellidoCliente").val();
        var Contacto = $("#Contacto").val();
        var Telefono = $("#Telefono").val();
        var Celular = $("#Celular").val();
        var Estado = $("#Estado").val();
        var Cuidad = $("#Cuidad").val();
        var Direccion = $("#Direccion").val();
        var Cp = $("#Cp").val();
        var Observaciones = $("#Observaciones").val();
        var Email = $("#Email").val();

        if (
            $.trim(rfc).length > 0 &&
            $.trim(NombreCliente).length > 0 &&
            $.trim(ApellidoCliente).length > 0 &&
            $.trim(Contacto).length > 0 &&
            $.trim(Celular).length > 0 &&
            $.trim(Estado).length > 0 &&
            $.trim(Cuidad).length > 0 &&
            $.trim(Direccion).length > 0 &&
            $.trim(Cp).length > 0 &&
            $.trim(Email).length > 0
        ) {
            $.ajax({
                url: "../funciones/clientes/addClientes.php",
                method: "POST",
                data: {
                    RFC: rfc,
                    NombreCliente: NombreCliente,
                    ApellidoCliente: ApellidoCliente,
                    Contacto: Contacto,
                    Telefono: Telefono,
                    Celular: Celular,
                    Estado: Estado,
                    Cuidad: Cuidad,
                    Direccion: Direccion,
                    Cp: Cp,
                    Observaciones: Observaciones,
                    Email: Email,
                },
                cache: "false",
                beforeSend: function() {
                    document.getElementById("btnAddClientes").disabled = true;

                    $("#btnAddClientes").val("Espere...");
                },
                success: function(data) {
                    $("#btnAddClientes").val("Guardar");
                    if (data == "1") {
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "El cliente se guardo con éxito",
                            showConfirmButton: false,
                            timer: 1500,
                        }).then(function() {
                            setInterval(function() {
                                location.reload();
                            }, 900);
                        });
                    } else {
                        Swal.fire({
                            position: "top-center",
                            icon: "error",
                            title: "El usuario o contraseña son incorrectos, por favor intente de nuevo",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                },
            });
        }
    });
});

// $(document).ready(function() {
//     // formSubmit()
//     $("#btnAddClientes").click(function() {
//         var datos = $("#frm_clientes").serialize();
//         $.ajax({
//             type: "POST",
//             url: "../funciones/clientes/addClientes.php",
//             data: datos,
//             success: function(r) {
//                 if (r == 1) {
//                     $("#frm_clientes")[0].reset();
//                     $("#agregarClientes").modal("hide");
//                     Swal.fire({
//                         position: "top-center",
//                         icon: "success",
//                         title: "El cliente se guardo con éxito",
//                         showConfirmButton: false,
//                         timer: 1500,
//                     }).then(function() {
//                         setInterval(function() {
//                             location.reload();
//                         }, 900);
//                     });
//                 } else {
//                     Swal.fire({
//                         position: "top-center",
//                         icon: "error",
//                         title: "Falla en el servidor, intente de nuevo",
//                         showConfirmButton: false,
//                         timer: 1500,
//                     });
//                 }
//             },
//         });

//         return false;
//     });
// });