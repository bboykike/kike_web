$(document).ready(() => {
    // metodo para agregar usuarios a la base de datos
    $("#btnguardar").click(function() {
        var datos = $("#usuario_form").serialize();
        $.ajax({
            type: "POST",
            url: "../funciones/usuarios/insert-usuarios.php",
            data: datos,
            success: function(r) {
                if (r == 1) {
                    $("#usuario_form")[0].reset();
                    $("#agregarUsuario").modal("hide");
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: "El usuario se guardo con éxito",
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
                        title: "Falla en el servidor, intente de nuevo",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                }
            },
        });

        return false;
    });

    // metodo para actualizar usuarios que ya estan en la base de datos
    $("#btnUpdate").click(function() {
        var datos2 = $("#usuario_form_update").serialize();
        $.ajax({
            type: "POST",
            url: "../funciones/usuarios/updateUsuario.php",
            data: datos2,
            success: function(r) {
                if (r == 1) {
                    $("#usuario_form_update")[0].reset();
                    $("#EditarUsuario").modal("hide");
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: "El usuario se actualizo con éxito",
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
                        title: "Falla en el servidor, intente de nuevo",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                }
            },
        });

        return false;
    });
});

function mostrarPassword() {
    var cambio = document.getElementById("contrasenia");
    if (cambio.type == "password") {
        cambio.type = "text";
        $(".icon").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
    } else {
        cambio.type = "password";
        $(".icon").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
    }
}

function mostrarPassword2() {
    var cambio = document.getElementById("contraseniaEdit");
    if (cambio.type == "password") {
        cambio.type = "text";
        $(".icon").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
    } else {
        cambio.type = "password";
        $(".icon").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
    }
}