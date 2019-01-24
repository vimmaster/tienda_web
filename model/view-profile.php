<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 21/01/2019
 * Time: 9:49
 */

function getProfile($connection, $id)
{
    try
    {
        $request = $connection->prepare("SELECT * FROM `Usuario` WHERE ID=?");
        $param = [
            $id,
        ];
        $request->execute($param);
        return $request->fetchAll(PDO::FETCH_ASSOC)[0];
    }
    catch (PDOException $e)
    {
        echo '<pre> Error: ' . $e->getMessage();
        die;
    }
}

function modifReg($connection, $id)
{
    try
    {
        $string = "
        UPDATE `Usuario`
        SET 
        `Email` = COALESCE(NULLIF(?, ''), `Email`),
        `Password` = COALESCE(NULLIF(?, ''), `Password`),
        `Nombre` = COALESCE(NULLIF(?, ''), `Nombre`),
        `Direccion` = COALESCE(NULLIF(?, ''), `Direccion`),
        `Poblacion` = COALESCE(NULLIF(?, ''), `Poblacion`),
        `Codigo-postal` = COALESCE(NULLIF(?, ''), `Codigo-postal`)
        WHERE ID=?
    ";
        $request = $connection->prepare($string);

        $param = [
            $_POST['mail'],
            $_POST['pswd'],
            $_POST['name'],
            $_POST['address'],
            $_POST['town'],
            $_POST['cp'],

            $id
        ];

        $request->execute($param);
    }
    catch (PDOException $e)
    {
        echo '<pre> Error: ' . $e->getMessage();
        die;
    }

}

function getImageName($connection, $id)
{
    try
    {
        $query = $connection->prepare("SELECT Imagen FROM Usuario WHERE ID=:id");
        $query->bindValue('id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_NUM)[0];
    }
    catch (PDOException $e)
    {
        echo '<pre> Error';print_r($e->getMessage()); die;
    }
}