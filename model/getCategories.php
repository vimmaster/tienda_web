<?php
function getCategories($connexio)
{
    try {
        $consulta_categoria = $connexio->prepare("SELECT ID,Nombre FROM 'Categoria'");
        $consulta_categoria->execute();
        $resultat_categoria = $consulta_categoria->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return($resultat_categoria);
}
?>
