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
        <div id="products-grid" class="grid-container">
            <?php foreach ($productos as $producto): ?>

                <div id="<?php echo $producto['ID']?>" class="grid-item product-name">
                <?php echo $producto['Nombre'] ?></div>


                <div class="grid-item">STOCK:<?php echo $producto['Cantidad-stock'] ?></div>


                <div class="grid-item"><?php echo $producto['Precio']?>$</div>

            <?php endforeach; ?>
        </div>
    </section>
<footer>
    <hr>
    <h4> &copy PC-SALES: created by Xavier Molina and Ricard Sanchez</h4>
</footer>
</body>
</html>