<!DOCTYPE html>
<html>
<head>
    <title>portatilbarato.com</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://tdiw-a1.deic-docencia.uab.cat/view/style.css">
</head>
<header>
    <h1>PortatilBarato</h1>
    <a href="http://tdiw-a1.deic-docencia.uab.cat/view/html/login.php"><h2 class="right">LOG-IN</h2></a>
</header>
<body>
<?php foreach ($array as $value): ?>
    <section>
        <?php echo $value['Nombre'] ?>
    </section>
<?php endforeach; ?>
    <footer>
        <hr>
        <h4> &copy PC-SALES: created by Xavier Molina and Ricard Sanchez</h4>
    </footer>
</body>
</html>