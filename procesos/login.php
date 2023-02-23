<?php
session_start();
require "../config.php";
$msg="No se pudo acceder.";
if(isset($_POST['btnLogin'])):
    require "../class/conexion.php";
    $user       =  new InvLocAppDB();

    $email      =   $_POST['txtEmail'];
    $password   =   md5($_POST['txtPassword']);

    $data       =   "email='".$email."'AND password='".$password."'";
    $u=$user->buscar("login",$data);
    if($u):
        foreach($u as $data):
            $_SESSION['administrador'] = $data['id'];
            $msg = $data['nombre '];
        endforeach;
    endif;
endif;
header("location:".urlsite."?mensaje=".$msg);