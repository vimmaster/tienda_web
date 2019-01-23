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
            $email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST['pswd'], FILTER_SANITIZE_STRING);
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
            $town = filter_var($_POST['town'], FILTER_SANITIZE_STRING);
            $cp = filter_var($_POST['cp'], FILTER_VALIDATE_REGEXP, array("options"=> array("regexp" => "^\d{5}(?:[-\s]\d{4})?$^")));
            $query->bindParam(':email', $email);
            $query->bindParam(':pswd', $password);
            $query->bindParam(':name', $name);
            $query->bindParam(':address', $address);
            $query->bindParam(':town', $town);
            $query->bindParam(':cp', $cp);
            $query->execute();
        }
        catch (PDOException $e)
        {
            echo '<pre> Error';print_r($e->getMessage()); die;
        }
    }
?>
