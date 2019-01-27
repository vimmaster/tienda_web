<?php
/**
 * Created by PhpStorm.
 * User: xavi1
 * Date: 22/01/2019
 * Time: 15:01
 */

 /** Menu */

if(isset($_SESSION['carritoDesplegable'])){
    if(!isset($_SESSION['carritoDesplegable']['Cantidad']))
    {$_SESSION['carritoDesplegable']['Cantidad']=0;}
    $txt = "Productos añadidos: ".$_SESSION['carritoDesplegable']['Cantidad']."</br> Precio: ".$_SESSION['carritoDesplegable']['Precio'];
}else{
    $txt = 'No hay productos';
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>portatilbarato.com</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/view/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/view/scripts.js"></script>
</head>

<a href="?action=0"><h1>PortatilBarato</h1></a>
<div id="container-profile">
    <button id="button-profile"><i class="fas fa-user-circle"></i></button>
    <div id="panel-profile" class="grid-item">
    <!--    <a href="../controller/login.php"><h>LOG-IN</h></a>     ->>
    <!--    <a href="../controller/register.php"><h>REGISTER</h></a>  -->

        <a href="../controller/view-profile.php"><h>Mi cuenta</h></a>
        <a href="../controller/make-historical.php"><h>Mis pedidos</h></a>
        <a href="../controller/logout.php"><h>Cerrar sessión</h></a>
    </div>
</div>
<div class="carritoDesplegable">

    <button class="botonCarrito">
        <a href="../index.php?action=carrito"><i class="fas fa-shopping-cart"></i></a>
    </button>
    <div class="carritoContingut">
        <h1>Carrito</h1>
        <?php  echo $txt?>

    </div>
</div>