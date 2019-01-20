<?php
    /**eng*/
    /**
     * Aces example
     * http://tdiw-a1.deic-docencia.uab.cat/?action=list-categories
     * http://tdiwtdiw-....cat/?action=show-product&id=1&...
     */
    require_once __DIR__.'/model/connectDB.php';
    $connect_obj = new ConnectDB();
    $files_absolute_path = '/home/TDIW/tdiw-a1/public_html/fitxers/';
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
        default:
            require_once __DIR__.'/controller/portada.php';
            break;
    }
?>
