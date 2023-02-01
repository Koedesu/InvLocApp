<?php
session_start();
include "inc/header.php";
if(isset($_SESSION['administrador']))
    $pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : "index";
else
    $pagina="login";
include "paginas/".$pagina.".php";
include "inc/footer.php";