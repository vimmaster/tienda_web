<?php
/**
 * Created by PhpStorm.
 * User: xavi1
 * Date: 22/01/2019
 * Time: 15:01
 */

 /** Menu */

if(isset($_SESSION['carritoDesplegable']) && !empty($_SESSION['carritoDesplegable']))
{
    if(!isset($_SESSION['carritoDesplegable']['Cantidad']))
    {
        $_SESSION['carritoDesplegable']['Cantidad']=0;
    }
    $txt = "Productos añadidos: ".$_SESSION['carritoDesplegable']['Cantidad'].
        "</br> Precio: ".$_SESSION['carritoDesplegable']['Precio'];
}
else
    {
    $txt = 'No hay productos';
}

?>

<a href="/"><h1 class="titulo-principal">PortatilBarato.com</h1></a>
<div id="container-profile">
    <button id="button-profile"><i class="fas fa-user-circle"></i></button>
    <div id="panel-profile" class="grid-item">
    <!--    <a href="../controller/login.php"><h>LOG-IN</h></a>     -->
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
        <h3>Carrito</h3>
        <?php  echo $txt?>
    </div>
</div>