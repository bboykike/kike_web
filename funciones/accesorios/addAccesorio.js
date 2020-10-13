$(document).ready(function () {
    $("#btnAddAccesorio").click(function () {
        var Nombre = $("#Nombre").val();
        var Marca = $("#Marca").val();
        var NoSerie = $("#NoSerie").val();
        var id_equipo = $("#id_equipo").val();

        if (
            $.trim(Nombre).length > 0 &&
            $.trim(Marca).length > 0 &&
            $.trim(NoSerie).length > 0 &&
            $.trim(id_equipo).length > 0
        ) {
            $.ajax({
                url: "../funciones/accesorios/addAccesorio.php",
                method: "POST",
                data: {
                    Nombre: Nombre,
                    Marca: Marca,
                    NoSerie: NoSerie,
                    id_equipo: id_equipo
                },
                cache: "false",
                beforeSend: function () {
                    document.getElementById("btnAddAccesorio").disabled = true;

                    $("#btnAddAccesorio").val("Espere...");
                },
                success: function (data) {
                    $("#btnAddAccesorio").val("Guardar");
                    if (data == "1") {
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "El accesorio se guardo con éxito",
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
                            title: "El usuario o contraseña son incorrectos, por favor intente de nuevo",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        document.getElementById("btnAddAccesorio").disabled = false;
                    }
                },
            });
        }
    });
});
