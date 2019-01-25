<?php
require_once __DIR__.'/../model/connectDB.php';
require_once __DIR__.'/../model/showProduct.php';
$connect_obj = ConnectDB::getInstance();
$connection = $connect_obj->getConnection();

//session_start();

if(isset($_GET['IDproducto'])){

    $IDProducto = $_GET['IDproducto'];

    $producto = getProduct($connection, $IDProducto);

    //echo $producto[0]['Nombre'];

    if (!isset($_SESSION["carritoDesplegable"])) {
        $_SESSION["carritoDesplegable"] = [];
        $_SESSION["carritoDesplegable"]["Precio"] = $producto[0]['Precio'];
        $_SESSION["carritoDesplegable"]["Cantidad"] = 1;
    } else {
        $_SESSION['carritoDesplegable']["Precio"] += $producto[0]['Precio'];
        $_SESSION['carritoDesplegable']["Cantidad"] += 1;
    }



    if(!isset($_SESSION["carrito"][$IDProducto]['Stock'])){

        $_SESSION["carrito"][$IDProducto]['Stock'] = 1;

    }else{
        $_SESSION["carrito"][$IDProducto]['Stock'] += 1;
    }

    $_SESSION["carrito"][$IDProducto]['Nombre'] = $producto[0]['Nombre'];
    $_SESSION["carrito"][$IDProducto]['Precio'] = $producto[0]['Precio'];


}


//echo $IDProducto;

include __DIR__.'/../view/carrito.php';

?>