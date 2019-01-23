<?php
/**
 * Created by PhpStorm.
 * User: xavi1
 * Date: 22/01/2019
 * Time: 15:36
 */

session_start();

if(isset($_SESSION['ID'])){
    session_destroy();

    echo"session cerrada";

    include __DIR__.'/../index.php';

}