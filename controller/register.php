<?php
/**
 * eng
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 29/10/2018
 * Time: 13:10
 */

require_once __DIR__.'/../model/connectDB.php';
require_once __DIR__.'/../model/register.php';
$connect_obj = ConnectDB::getInstance();

$password_length = 10;
 if(!isset($_POST['name']) || empty($_POST['name']))
 {
     require_once __DIR__ .'/../view/register.php';
 }
 else
 {
     if( $_POST['name'] !== '' && $_POST['mail'] !== '' && $_POST['pswd'] !== '' &&
         $_POST['repeat_pswd'] !== '' &&
         $_POST['pswd'] === $_POST['repeat_pswd'] &&
         strlen($_POST['pswd']) >= $password_length)
     {
         $connection = $connect_obj->getConnection();
         $_POST['pswd'] = password_hash($_POST['pswd'], PASSWORD_BCRYPT);
         $id = saveReg($connection);
         if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image']))
         {
             $path = $files_absolute_path . 'user_img' . (string) $id;
             move_uploaded_file($_FILES['profile_image']['tmp_name'], $path);
         }
         $_POST['name'] = ''; $_POST['mail'] = '';
         $_POST['pswd'] = ''; $_POST['repeat_pswd'] = '';
         header('Location: http://tdiw-a1.deic-docencia.uab.cat/index.php');
     }
     else
     {
         header('Location: http://tdiw-a1.deic-docencia.uab.cat/view/register.php');
     }
 }
?>