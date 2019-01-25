<?php
    /**eng*/
    /**
     * Aces example
     * http://tdiw-a1.deic-docencia.uab.cat/?action=list-categories
     * http://tdiwtdiw-....cat/?action=show-product&id=1&...
     */

    //session_start();
    //if(session_start == true){
     //   echo $_SESSION['ID'];
   // }
    session_start();

    require_once __DIR__.'/controller/headerController.php';

    require_once __DIR__.'/model/connectDB.php';
    $connect_obj = new ConnectDB();

    $files_absolute_path = '/home/TDIW/tdiw-a1/public_html/fitxers/';
    $files_public_path = '/fitxers/';

    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    }
    else
    {
        $action = '';
    }


    switch ($action)
    {
        case 'list-categories':
            require_once __DIR__.'/controller/list-categories.php';
            break;
        case 'list-products':
            require_once __DIR__.'/controller/listarProductos.php';
            break;
        case 'show-product':
            require_once  __DIR__.'/controller/showProduct.php';
            break;
        case 'register':
            require_once __DIR__ . '/controller/register.php';
            break;
        case 'login':
            require_once __DIR__.'/controller/login.php';
            break;
        case 'carrito':
            require_once __DIR__.'/controller/carrito.php';
            break;
        default:
            include __DIR__.'/controller/portada.php';
            break;
    }
?>
