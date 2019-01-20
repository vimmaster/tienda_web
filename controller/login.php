<?php
/**
 * eng
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 29/10/2018
 * Time: 13:10
 */

if(!isset($_POST['name']) and !isset($_POST['pswd']))
{
    require_once __DIR__.'/../view/login.php';
    session_start();

}
else
{
    /** checkLog() */
}
?>