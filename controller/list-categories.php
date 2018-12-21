<?php
    /** esp */
    require_once __DIR__.'/../model/connectDB.php';
    $connect_obj = ConnectDB::getInstance();
    $categorias = $connect_obj->getCategories();
    require_once __DIR__ . '/../view/list-categories.php';
    ?>