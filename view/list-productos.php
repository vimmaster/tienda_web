
<!DOCTYPE html>
<html>
<head>
    <title>portatilbarato.com</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://tdiw-a1.deic-docencia.uab.cat/view/css/estilo.css">
</head>
<header>
    <a href="/controller/list-categories.php"><h1>PortatilBarato</h1></a>
    <a href="http://tdiw-a1.deic-docencia.uab.cat/view/login.php"><h2 class="right">LOG-IN</h2></a>
</header>
<body>
<?php foreach ($productos as $producto): ?>
    <section>
        <table border="2" valign="middle" width="65%">
            <tr>
                <th><a href="/controller/showProduct.php?id=<?php echo $producto['ID']?>">
                    <?php echo $producto['Nombre'] ?></a></th>
            </tr>
            <tr>
                <td><?php echo $producto['Precio'] ?></td>
            </tr>
            <tr>
                <td><?php echo $producto['Cantidad-stock']?>$</td>
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