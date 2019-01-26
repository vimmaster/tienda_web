<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 26/01/2019
 * Time: 17:53
 */

require_once __DIR__.'/../model/connectDB.php';
$connect_obj = ConnectDB::getInstance();
$connection = $connect_obj->getConnection();
session_start();

if(isset($_SESSION['carrito']))
{
    require_once __DIR__.'/../model/save-shopping.php';
    saveShopping($connection);
    $_SESSION['carritoDesplegable'] = [];
    $_SESSION['carrito'] = [];
    require_once __DIR__.'/../view/save-shopping.php';
    exit;
}
else
{
    echo '<body><p> No hay productos seleccionados </p></body>';
}

