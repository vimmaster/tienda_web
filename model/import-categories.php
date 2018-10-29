<?php
    $query = $connection->prepare('select ID, Nombre from CATEGORIA');
    $query->execute();
    $array = $query->fetchAll();
    ?>