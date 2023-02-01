<?php
if(isset($_POST['btnLogin'])):
    require "class/conexion.php"
    $email=$_POST['txtEmail'];
    $password=$_POST['txtPassword'];
else:
    echo "No hay acceso";
endif;

?>