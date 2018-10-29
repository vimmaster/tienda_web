<?php
function connectaBD(){
    $servidor = "https://deic-docencia.uab.cat/phpmyadmin/"; $usuari = "tdiw-a1"; $clau = "iHSWoJQs";
    try{
        $connexio = new PDO("mysql:host=$servidor;dbname=myDB;charset=UTF8", $usuari, $clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return($connexio);
}
?>


