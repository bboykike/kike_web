$(document).ready(function () {
    $("#btnUpEquipo").click(function () {
        var id_e = $("#id_e").val();
        var TipoEquipo2 = $("#TipoEquipo2").val();
        var Marca2 = $("#Marca2").val();
        var Modelo2 = $("#Modelo2").val();
        var NoSerie2 = $("#NoSerie2").val();
        var id_sucursal2 = $("#id_sucursal2").val();
        var estatus3 = $("#estatus3").val();

        if (
            $.trim(TipoEquipo2).length > 0 &&
            $.trim(Marca2).length > 0 &&
            $.trim(Modelo2).length > 0 &&
            $.trim(NoSerie2).length > 0 &&
            $.trim(id_sucursal2).length > 0 &&
            $.trim(estatus3).length > 0
        ) {
            $.ajax({
                url: "../funciones/equipos/upEquipo.php",
                method: "POST",
                data: {
                    id_e: id_e,
                    TipoEquipo2: TipoEquipo2,
                    Marca2: Marca2,
                    Modelo2: Modelo2,
                    NoSerie2: NoSerie2,
                    id_sucursal2: id_sucursal2,
                    estatus3: estatus3
                },
                cache: "false",
                beforeSend: function () {
                    document.getElementById("btnUpEquipo").disabled = true;
                    $("#btnUpEquipo").val("Espere...");
                },
                success: function (data) {
                    if (data == "1") {
                        $("#btnUpEquipo").val("Guardar");
                        document.getElementById("btnUpEquipo").disabled = true;
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "El equipo se actualizo con éxito",
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
                        document.getElementById("btnUpEquipo").disabled = false;

                    }
                },
            });
        }
    });
});

