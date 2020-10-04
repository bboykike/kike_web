<!DOCTYPE html>
<?php require_once "funciones/configGeneral.php"; ?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <?php require_once "base/estilos.php"; ?>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">

        <?php require_once "base/navbar-view.php"; ?>


        <?php require_once "base/navlateral-view.php"; ?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <?php 
                        if(isset($_GET['vista'])){
                            $vistas=explode("/", $_GET['vista']);
                            if(is_file('vistas/'.$vistas[0].'-vista.php')){
                                include 'vistas/'.$vistas[0].'-vista.php';
                            }else{
                                include 'vistas/404-vista.php';
                            }
                            
                        }else{
                            echo '<meta http-equiv="refresh" content="0;url=login.php">';
                        }
                        
                    ?>


                </div> <!-- container -->
            </div> <!-- content -->
            <?php require_once "base/footer-view.php"; ?>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- jQuery  -->
    <?php require_once "base/scripts.php"; ?>

</body>

</html>