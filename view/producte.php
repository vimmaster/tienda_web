<!DOCTYPE html>
<html>
<head>
	<title>PC-Sales</title>
	<meta charset="utf-8">
</head>
<header><a href="http://tdiw-a1.deic-docencia.uab.cat/index.php">PC-Sales</a></header>
<body>
<section>
	<h> <?php $prueba = getProducts(connexio, 4); ?> </h><br/>
	<p1> Especificacions:</p1>
	<img src="http://tdiw-a1.deic-docencia.uab.cat/img/Az3.jpg" alt="Computer Image" style="width: 25%;">
</section>
<footer>
    <?php include __DIR__.'/footer.php'?>
</footer>
</body>
</html>