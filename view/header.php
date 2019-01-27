<?php /** Menu */
if(isset($_SESSION['carritoDesplegable']) && !empty($_SESSION['carritoDesplegable'])){
    if(!isset($_SESSION['carritoDesplegable']['Cantidad']))
    {$_SESSION['carritoDesplegable']['Cantidad']=0;}
    $txt = "Productos añadidos: ".$_SESSION['carritoDesplegable']['Cantidad']."</br> Precio: ".
        $_SESSION['carritoDesplegable']['Precio'];
}else{
    $txt = 'No hay productos';
}
?>

<a href="/"><h1 class="titulo-principal">PortatilBarato.com</h1></a>
<div id="container-profile">
    <button id="button-profile"><i class="fas fa-user-circle"></i></button>
    <div id="panel-profile" class="grid-item">
        <a href="../controller/login.php"><h>LOG-IN</h></a>
        <a href="../controller/register.php"><h>REGISTER</h></a>
       <!-- <a href="../controller/carrito.php"><h>CARRITO</h></a>
        <a href="#"><h>Mi cuenta</h></a>
        <a href="#"><h>Mis pedidos</h></a>
        <a href="#"><h>Cerrar sessión</h></a>  -->
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
