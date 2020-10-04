<?php
require_once "../configGeneral.php";


session_start();
session_destroy();
header("location: ".SERVERURL."login-vista.php");


?>