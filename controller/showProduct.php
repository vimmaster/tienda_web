<?php
/**
 * Eng
 * Created by PhpStorm.
 * User: ricard sanchez
 * Date: 11/11/2018
 * Time: 19:26
 */
    require_once __DIR__.'/../model/connectDB.php';
    require_once __DIR__.'/../model/showProduct.php';

    $connect_obj = ConnectDB::getInstance();
    $connection = $connect_obj->getConnection();
    $product = getProduct($connection, $_GET['id2']);
    $product = $product[0];

    require_once __DIR__.'/../view/showProduct.php';

