<?php
/**
 * Created by PhpStorm.
 * User: xavi1
 * Date: 22/01/2019
 * Time: 15:18
 */

if(isset($_SESSION['ID'][0]['ID'])){
    include __DIR__.'/../view/headerLogeado.php';

}
else{
    include __DIR__.'/../view/header.php';
}