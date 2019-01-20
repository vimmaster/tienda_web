<?php


require_once __DIR__.'/../model/connectDB.php';
$connect_obj = ConnectDB::getInstance();
$categorias = $connect_obj->getCategories();

$connect_obj = ConnectDB::getInstance();
$categoria = $_GET['id'];
$productos = $connect_obj->getProducts($categoria);

require_once __DIR__.'/../view/carrito.php';

?>