<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 24/01/2019
 * Time: 18:28
 */

require_once __DIR__.'/../model/connectDB.php';
require_once __DIR__.'/../model/make-historical.php';
$connect_obj = ConnectDB::getInstance();
$connection = $connect_obj->getConnection();
session_start();

$bills = getBills($connection, $_SESSION['ID'][0]['ID']);

$new_bills = array();
foreach($bills as $sql_row)
{
    if(array_key_exists($sql_row['id-factura'], $new_bills))
    {
        array_push($new_bills[$sql_row['id-factura']], $sql_row);
    }
    else
    {
        $new_bills[$sql_row['id-factura']] = array($sql_row);
    }
}
$bills = $new_bills;

require_once __DIR__.'/../view/make-historical.php';

