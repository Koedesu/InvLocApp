<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENTO HTML</title>
</head>
<body>
    <?php if(isset($_SESSION['administrador'])): ?>
    <a href="<?php echo urlsite?>/procesos/logout.php">SALIR</a>
    <?php endif; ?>
