<?php
/**
 * Eng
 * Created by PhpStorm.
 * User: ricard sanchez
 * Date: 11/11/2018
 * Time: 19:33
 */

function getProduct($connection, $id)
{
    try
    {
        $request = $connection->prepare("SELECT * FROM `Producto` WHERE  
        ID=:idProduct");
        $request->bindValue("idProduct", $id);
        $request->execute();
        $product = $request->fetchAll(PDO::FETCH_ASSOC);
        return $product;
    }
    catch (PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        die;
    }
}
?>