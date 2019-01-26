<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 26/01/2019
 * Time: 17:54
 */


function saveShopping($connection)
{
    try
    {
        $request = $connection->prepare('insert into Factura(fecha, `id-user`) value (NOW(), ?)');
        $request->bindValue(1, $_SESSION['ID'][0]['ID']);
        $request->execute();

        $request = $connection->prepare("select LAST_INSERT_ID()");
        $request->execute();
        $bill_id = $request->fetch(PDO::FETCH_NUM)[0];

        foreach($_SESSION['carrito'] as $product_id => $product)
        {
            $request = $connection->prepare('insert into `Linea-compra`(cantidad, `id-factura`, `id-producto`) 
                                          values (?,?,?)');
            $request->bindValue(1, $product['Stock']);
            $request->bindValue(2, $bill_id);
            $request->bindValue(3, $product_id);
            $request->execute();
        }
    }
    catch(PDOException $e)
    {
        echo '<pre>'; print_r($e); die;
    }
}