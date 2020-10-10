$(document).ready(function () {
    $("#btnAddEquipo").click(function () {
        var TipoEquipo = $("#TipoEquipo").val();
        var Marca = $("#Marca").val();
        var Modelo = $("#Modelo").val();
        var NoSerie = $("#NoSerie").val();
        var id_sucursales = $("#id_sucursales").val();

        if (
            $.trim(TipoEquipo).length > 0 &&
            $.trim(Marca).length > 0 &&
            $.trim(Modelo).length > 0 &&
            $.trim(NoSerie).length > 0 &&
            $.trim(id_sucursales).length > 0
        ) {
            $.ajax({
                url: "../funciones/equipos/addEquipos.php",
                method: "POST",
                data: {
                    TipoEquipo: TipoEquipo,
                    Marca: Marca,
                    Modelo: Modelo,
                    NoSerie: NoSerie,
                    id_sucursales: id_sucursales
                },
                cache: "false",
                beforeSend: function () {
                    document.getElementById("btnAddEquipo").disabled = true;
                    $("#btnAddEquipo").val("Espere...");
                },
                success: function (data) {
                    if (data == "1") {
                        $("#btnAddEquipo").val("Guardar");
                        document.getElementById("btnAddEquipo").disabled = true;
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "El equipo se guardo con éxito",
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
                        document.getElementById("btnAddEquipo").disabled = false;

                    }
                },
            });
        }
    });
});

