<?php
/**
 * eng
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 29/10/2018
 * Time: 13:10
 */

if($_POST['name'] == '' and $_POST['pswd'] == '')
{
    require_once __DIR__.'/../view/login.php';
}
else
{
    /** checkLog() */
}
?>