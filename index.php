<?php
session_start();
include "inc/header.php";
if(isset($_SESSION['administrador']))
    $pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : "pages/index.php";
else
    $pagina="login";
include "pages/".$pagina.".php";
include "inc/footer.php";
?>