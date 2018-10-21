<?php

    require_once __DIR__.'/model/config.php';
    $action = $_GET['action'];

    switch ($action)
    {
        default:
            require_once __DIR__.'/controller/list-categories.php';
            break;
    }
?>