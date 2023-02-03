<?php
if(isset($_POST['btnLogin'])):
    require "class/conexion.php";
    $user = new InvLocAppDB();

    $email = $_POST['txtEmail'];
    $password = md5($_POST['txtPassword']);

    $data = "email'".$email."',password='".$password."'";
    $u=$user->buscar("login",$data);
    if($u):   
    foreach($u as $data):
        echo $data ['email']."ok";
    endforeach;
else:
    echo "No hay acceso";
endif;