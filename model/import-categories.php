<?php
    $query = $connection->prepare('SELECT ID, Nombre FROM CATEGORIA');
    $query->execute();
    $array = $query->fetchAll();
    ?>