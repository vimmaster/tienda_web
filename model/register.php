<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 29/10/2018
 * Time: 13:15
 */

    function saveLog($connection)
    {
        try
        {
            $query = $connection->prepare("insert into Usuario(Nombre, Password, email) values (:name,:pswd,:email)");
            $query->bindParam(':name', $name);
            $query->bindParam(':pswd', $password);
            $query->bindParam(':email', $email);
            $name = $_POST['name'];
            $password = $_POST['pswd'];
            $email = $_POST['mail'];
            $query->execute();
        }
        catch (PDOException $e)
        {
            echo '<pre> Error';print_r($e->getMessage()); die;
        }
    }
?>
