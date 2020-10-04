$(document).ready(function() {
    $("#btnUpSucursal").click(function() {
        var id_sucursal = $("#id_sucursal").val();
        var nombre2 = $("#nombre2").val();
        var direccion2 = $("#direccion2").val();
        var id_cliente3 = $("#id_cliente3").val();
        var es = $("#es").val();

        if (
            $.trim(id_sucursal).length > 0 &&
            $.trim(nombre2).length > 0 &&
            $.trim(direccion2).length > 0 &&
            $.trim(id_cliente3).length > 0
        ) {
            $.ajax({
                url: "../funciones/sucursal/updateSucursal.php",
                method: "POST",
                data: {
                    id_sucursal: id_sucursal,
                    nombre2: nombre2,
                    direccion2: direccion2,
                    id_cliente3: id_cliente3,
                    es: es,
                },
                cache: "false",
                beforeSend: function() {
                    document.getElementById("btnUpSucursal").disabled = true;
                    $("#btnUpSucursal").val("Espere...");
                },
                success: function(data) {
                    $("#btnUpSucursal").val("Guardar");
                    document.getElementById("btnUpSucursal").disabled = true;
                    if (data == "1") {
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "La sucursal se actualizo con éxito",
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