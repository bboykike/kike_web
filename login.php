<?php  
session_start();
if(isset($_SESSION['UserName'])){
    header("location: activos/");
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>TECESINF - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- App favicon -->
    <link rel="shortcut icon" href="archivos/assets/images/favicon.ico">

    <!-- Sweet Alert -->
    <link href="archivos/assets/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="archivos/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="archivos/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="archivos/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="archivos/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="archivos/assets/js/modernizr.min.js"></script>

</head>


<body class="bg-accpunt-pages">

    <!-- HOME -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="account-pages">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase text-center">
                                        <a href="index.html" class="text-success">
                                            <span><img src="archivos/assets/images/logo_dark.png" alt=""
                                                    height="30"></span>
                                        </a>
                                    </h2>
                                    <h5 class="text-uppercase font-bold m-b-5 m-t-50">Inicio de Sesión</h5>

                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="#" id="frm_login" method="POST"
                                        autocomplete="off">

                                        <div class="form-group m-b-20 row">
                                            <div class="col-12">
                                                <label for="emailaddress">Nombre de usuario</label>
                                                <input class="form-control" type="text" id="UserName" name="UserName"
                                                    required="" placeholder="john@deo">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html"
                                                    class="text-muted pull-right"><small>Olvidaste tu Contraseña?

                                                    </small></a>
                                                <label for="password">Contraseña</label>
                                                <input class="form-control" type="password" required="" id="contrasenia"
                                                    name="contrasenia" placeholder="Ingrese su contraseña">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" checked="">
                                                    <label for="remember">
                                                        ¿Mantener sesión abierta?
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center m-t-10">
                                            <div class="col-12">
                                                <button
                                                    class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                                    type="button" id="btn_login">INICAR SESIÓN</button>
                                            </div>
                                        </div>

                                    </form>


                                    <div class="row m-t-50">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted">¿No tienes cuenta? <a href="page-register.html"
                                                    class="text-dark m-l-5"><b>Registrar Usuario</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->


                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <script>
    $(document).ready(function() {

        $('#btn_login').click(function() {
            var usuario = $("#UserName").val();
            var pass = $("#contrasenia").val();

            if ($.trim(usuario).length > 0 && $.trim(pass).length > 0) {
                $.ajax({

                    url: 'funciones/login/login.php',
                    method: 'POST',
                    data: {
                        UserName: usuario,
                        contrasenia: pass
                    },
                    cache: 'false',
                    beforeSend: function() {

                        $("#btn_login").val("Conectando...");

                    },
                    success: function(data) {
                        $("#btn_login").val("INICIAR SESIÓN");
                        if (data == "1") {
                            $(location).attr('href', 'activos/');
                        } else {
                            Swal.fire({
                                position: 'top-center',
                                icon: 'error',
                                title: 'El usuario o contraseña son incorrectos, por favor intente de nuevo',
                                showConfirmButton: false,
                                timer: 1500
                            })

                        }

                    }


                });
            }
        });

    });
    </script>



    <script>
    var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="archivos/assets/js/jquery.min.js"></script>
    <script src="archivos/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="archivos/assets/js/bootstrap.min.js"></script>
    <script src="archivos/assets/js/metisMenu.min.js"></script>
    <script src="archivos/assets/js/waves.js"></script>
    <script src="archivos/assets/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="archivos/assets/js/jquery.core.js"></script>
    <script src="archivos/assets/js/jquery.app.js"></script>
    <!-- <script src="funciones/login/login.js"></script> -->

    <!-- Sweet-Alert  -->
    <script src="archivos/assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="archivos/plugins/select2/js/select2.min.js" type="text/javascript"></script>
</body>

</html>