<?php
/**
 * eng
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 29/10/2018
 * Time: 13:10
 */

require_once __DIR__.'/../model/connectDB.php';

$connectObject = connectDB::getInstance();
$connection = $connectObject->getConnection();


if (!isset($_POST['mail']))
{
    include __DIR__.'/../view/login.php';
}
else
{
    include __DIR__.'/../model/login.php';
    $X = login($connection);
    //echo '<pre>'; print_r($X); die;

    session_start();
    $_SESSION['ID'] = $X;

    include __DIR__.'/../index.php';
}






/*
if(!isset($_POST['name']) and !isset($_POST['pswd']))
{
    require_once __DIR__.'/../view/login.php';
    session_start();

}
else
{
    /** checkLog() */
//}


?>