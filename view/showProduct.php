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
    <section>
        <table border="2" valign="middle" width="65%">
            <tr>
                <th><?php echo $product['Nombre']?> </a></th>
            </tr>
            <tr>
                <td><?php echo $product['Descripcion'] ?></td>
            </tr>
            <tr>
                <td> <img src="<?php echo $product['Imagen']?>"></td>
            </tr>
        </table>


    </section>
<footer>
    <hr>
    <h4> &copy PC-SALES: created by Xavier Molina and Ricard Sanchez</h4>
</footer>
</body>
</html>

