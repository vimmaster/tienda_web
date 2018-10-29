<?php

function getProducts($connexio, $categoria)
{
    try {
        $consulta_producto = $connexio->prepare("SELECT * FROM 'Producto' WHERE 'id-categoria = ' $categoria");
        $consulta_producto->execute();
        $resultat_producto = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return($resultat_producto);
}
?>