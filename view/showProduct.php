<!DOCTYPE html>
<html>
<head>
    <title>portatilbarato.com</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/view/css/estilo.css">
</head>
<header>
    <a href="/"><h1>PortatilBarato</h1></a>
    <a href="http://tdiw-a1.deic-docencia.uab.cat/view/login.php"><h2 class="right">LOG-IN</h2></a>
</header>
<body>
    <section>
        <div id="product-grid" class="grid-container">

            <div class="grid-item"><?php echo $product['Nombre']?> </a></div>


            <div class="grid-item"><?php echo $product['Descripcion'] ?></div>


            <div class="grid-item"> <img src="<?php echo $product['Imagen']?>"></div>

        </div>
    </section>
<footer>
    <hr>
    <h4> &copy PC-SALES: created by Xavier Molina and Ricard Sanchez</h4>
</footer>
</body>
</html>

