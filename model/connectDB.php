<?php

class ConnectDB
{

    private static $instance = null;
    private $connexio;

   function __construct()
    {
        $servidor = "localhost";
        $usuari = "tdiw-a1";
        $clau = "iHSWoJQs";
        try {
            $this->connexio = new PDO("mysql:host=$servidor;dbname=tdiwa1;charset=UTF8", $usuari, $clau);
            $this->connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return ($this->connexio);
    }


    static public function getInstance()
    {

        if (self::$instance == null) {
            self::$instance = new ConnectDB();
        }
        return self::$instance;

    }

    public function getConnection()
    {
        return $this->connexio;
    }


    public function getCategories()
    {
        try {
            $consulta_categoria = $this->connexio->prepare("SELECT ID,Nombre FROM Categoria");
            $consulta_categoria->execute();
            $resultat_categoria = $consulta_categoria->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($resultat_categoria);
    }

    function getProducts($categoria)
    {
        try {
            $consulta_producto = $this->connexio->prepare("SELECT * FROM `Producto` WHERE idCategoria=$categoria and Activo=1");
            $consulta_producto->execute();
            $resultat_producto = $consulta_producto->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return($resultat_producto);
    }

}




?>



