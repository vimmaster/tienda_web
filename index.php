<?php
    require_once __DIR__.'/model/config.php';

    $action = $_GET['do'];

    switch ($action)
    {
        case 'list-categories':
            require_once __DIR__.'/controller/list-categories.php';
            break;
        default:
            require_once __DIR__.'/controller/static-web.php';
            break;
    }
?>