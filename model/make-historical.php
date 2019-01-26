<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 25/01/2019
 * Time: 21:24
 */

function getBills($connect, $id)
{
    try
    {
        $string = 'select Producto.*, `Linea-compra`.cantidad, `Linea-compra`.`id-factura`, Factura.fecha 
                       from Producto 
                       inner join `Linea-compra` on `Linea-compra`.`id-producto` = Producto.id
					   inner join Factura on Factura.id = `Linea-compra`.`id-factura`
                       where Factura.`id-user` = ?';
        $query = $connect->prepare($string);
        $query->execute(array($id));
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        echo '<pre>'; print_r($e); die;
    }

}