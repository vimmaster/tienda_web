<!DOCTYPE html>
<html>
<head>
    <title>portatilbarato.com</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/view/estilo.css">
</head>
<header>
    <a href="../controller/list-categories.php"><h1>PortatilBarato</h1></a>
    <a href="../controller/login.php"><h2 class="right">LOG-IN</h2></a>
</header>
<body>
<?php foreach ($categorias as $categoria): ?>
    <section>
        <table border="2" valign="middle" width="65%">
            <tr>
                <th><a href="/controller/listarProductos.php?id=<?php echo $categoria['ID'] ?>"><?php echo $categoria['Nombre'] ?></a></th>
            </tr>
        </table>

    </section>
<?php endforeach; ?>
    <footer>
        <hr>
        <h4> &copy PC-SALES: created by Xavier Molina and Ricard Sanchez</h4>
    </footer>
</body>
</html>