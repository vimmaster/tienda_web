<?php

    require_once __DIR__.'/model/connectDB.php';
    $action = $_GET['action'];

    switch ($action)
    {
        case 'listarProductos':
            require_once __DIR__.'/controller/listarProductos.php';
            break;

        default:
            require_once __DIR__.'/controller/portada.php';
            break;
    }
?>

index.php?action=listarProductos&id_categoria=5
