$(document).ready(function () {
    $("#btnUpEmpleado").click(function () {
        var id_empleado = $("#id_empleado").val();
        var nombre2 = $("#nombre2").val();
        var apellido2 = $("#apellido2").val();
        var direccion2 = $("#direccion2").val();
        var area2 = $("#area2").val();
        var correo2 = $("#correo2").val();
        var estatus4 = $("#estatus4").val();


        if (
            $.trim(id_empleado).length > 0 &&
            $.trim(nombre2).length > 0 &&
            $.trim(apellido2).length > 0 &&
            $.trim(direccion2).length > 0 &&
            $.trim(area2).length > 0 &&
            $.trim(correo2).length > 0 &&
            $.trim(estatus4).length > 0
        ) {

            $.ajax({
                url: "../funciones/empleados/upEmpleados.php",
                method: "POST",
                data: {
                    id_empleado: id_empleado,
                    nombre2: nombre2,
                    apellido2: apellido2,
                    direccion2: direccion2,
                    area2: area2,
                    correo2: correo2,
                    estatus4: estatus4
                },
                cache: "false",
                beforeSend: function () {
                    document.getElementById("btnUpEmpleado").disabled = true;
                    $("#btnUpEmpleado").val("Espere...");
                },
                success: function (data) {
                    $("#btnUpEmpleado").val("Guardar");
                    document.getElementById("btnUpEmpleado").disabled = true;
                    if (data == "1") {
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "El cliente se actualizo con éxito",
                            showConfirmButton: false,
                            timer: 1500,
                        }).then(function () {
                            setInterval(function () {
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
                        document.getElementById("btnUpEmpleado").disabled = false;

                    }
                },
            });
        }
    });
});