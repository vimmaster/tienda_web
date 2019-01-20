<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 29/10/2018
 * Time: 13:15
 */

    function saveReg($connection)
    {
        try
        {
            $query = $connection->prepare("insert into Usuario(Email, Password, Nombre, Direccion, Poblacion,
                    `Codigo-postal`) values (:email, :pswd, :name, :address, :town, :cp)");
            $email = $_POST['mail'];
            $password = $_POST['pswd'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $town = $_POST['town'];
            $cp = $_POST['cp'];
            $query->bindParam(':email', $email);
            $query->bindParam(':pswd', $password);
            $query->bindParam(':name', $name);
            $query->bindParam(':address', $address);
            $query->bindParam(':town', $town);
            $query->bindParam(':cp', $cp);
            $query->execute();

            $query = $connection->prepare("select LAST_INSERT_ID()");
            $query->execute();
            $id = $query->fetch(PDO::FETCH_NUM)[0];

            $query = $connection->prepare("update Usuario set Imagen=:img where ID=:id");
            $query->bindValue('id', $id);
            $query->bindValue('img', 'user_img' . (string) $id);
            $query->execute();

            return $id;
        }
        catch (PDOException $e)
        {
            echo '<pre> Error';print_r($e->getMessage()); die;
        }
    }

    function getImageName($id, $connection)
    {
        try
        {
            $query = $connection->prepare("SELECT Imagen FROM Usuario WHERE ID = :id");
            $query->bindValue('id', $id);
            $query->execute();
            return $query->fetch(PDO::FETCH_NUM)[0];
        }
        catch (PDOException $e)
        {
            echo '<pre> Error';print_r($e->getMessage()); die;
        }
    }
?>
