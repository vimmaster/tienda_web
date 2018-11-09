<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 29/10/2018
 * Time: 13:10
 */
require_once  __DIR__.'/../model/config.php';
require_once __DIR__.'/../model/register.php';

$password_length = 3;

 if($_POST['name'] == '')
 {
     require_once __DIR__ .'/../view/register.php';
 }
 else
 {
     if($_POST['name'] !== '' && $_POST['mail'] !== '' && $_POST['pswd'] !== '' &&
         $_POST['repeat_pswd'] !== '' &&
         $_POST['pswd'] === $_POST['repeat_pswd'] &&
         strlen($_POST['pswd']) >= $password_length)
     {
         saveLog($connection);
         header('Location: http://tdiw-a1.deic-docencia.uab.cat/index.php');
     }
     else
     {
         echo '<pre> Arrives here';
         header('Location: http://tdiw-a1.deic-docencia.uab.cat/view/register.php');
     }
 }
?>