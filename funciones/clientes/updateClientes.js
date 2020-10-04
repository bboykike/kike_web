$(document).ready(function() {
    $("#btnUpClientes").click(function() {
        var id_cliente = $("#id_cliente").val();
        var rfc2 = $("#RFC2").val();
        var NombreCliente2 = $("#NombreCliente2").val();
        var ApellidoCliente2 = $("#ApellidoCliente2").val();
        var Contacto2 = $("#Contacto2").val();
        var Telefono2 = $("#Telefono2").val();
        var Celular2 = $("#Celular2").val();
        var Estado2 = $("#Estado2").val();
        var Cuidad2 = $("#Cuidad2").val();
        var Direccion2 = $("#Direccion2").val();
        var Cp2 = $("#Cp2").val();
        var Observaciones2 = $("#Observaciones2").val();
        var Email2 = $("#Email2").val();
        var estatus2 = $("#estatus2").val();

        if (
            $.trim(rfc2).length > 0 &&
            $.trim(NombreCliente2).length > 0 &&
            $.trim(ApellidoCliente2).length > 0 &&
            $.trim(Contacto2).length > 0 &&
            $.trim(Celular2).length > 0 &&
            $.trim(Estado2).length > 0 &&
            $.trim(Cuidad2).length > 0 &&
            $.trim(Direccion2).length > 0 &&
            $.trim(Cp2).length > 0 &&
            $.trim(Email2).length > 0 &&
            $.trim(estatus2).length > 0
        ) {

            $.ajax({
                url: "../funciones/clientes/updateClientes.php",
                method: "POST",
                data: {
                    id_cliente: id_cliente,
                    RFC2: rfc2,
                    NombreCliente2: NombreCliente2,
                    ApellidoCliente2: ApellidoCliente2,
                    Contacto2: Contacto2,
                    Telefono2: Telefono2,
                    Celular2: Celular2,
                    Estado2: Estado2,
                    Cuidad2: Cuidad2,
                    Direccion2: Direccion2,
                    Cp2: Cp2,
                    Observaciones2: Observaciones2,
                    Email2: Email2,
                    estatus2: estatus2
                },
                cache: "false",
                beforeSend: function() {
                    document.getElementById("btnUpClientes").disabled = true;
                    $("#btnUpClientes").val("Espere...");
                },
                success: function(data) {
                    $("#btnUpClientes").val("Guardar");
                    document.getElementById("btnUpClientes").disabled = true;
                    if (data == "1") {
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "El cliente se actualizo con éxito",
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
                            title: "Error en el servidor, intente de nuevo",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                },
            });
        }
    });
});