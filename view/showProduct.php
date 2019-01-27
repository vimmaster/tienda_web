<!DOCTYPE html>
<html>
    <head>
        <?php include __DIR__.'/head.php'; ?>
    </head>
    <body>
        <header>
            <?php include __DIR__.'/../controller/headerController.php' ?>
        </header>
        <section>
            <?php /** Solo se carga el div si no se va por action */ ?>
            <div id="product-grid" class="grid-container">

                <div class="grid-item">
                    <h3>Prodcuto: </h3>
                    <?php echo $product['Nombre']?>
                </div>


                <div class="grid-item">
                    <h3>Descripcion: </h3>
                    <?php echo htmlentities($product['Descripcion'], ENT_QUOTES | ENT_HTML5) ?>
                </div>


                <div class="grid-item"> <img src="<?php echo $product['Imagen']?>"></div>

                <div class="grid-item">
                    <a>Precio: </a><?php echo $product['Precio'];?><a>$</a>
                    <a href="?action=carrito&IDproducto=<?php echo $product['ID']; ?>"> <button>Añadir a la cesta </button></a>
                </div>

            </div>
        </section>
        <footer class="footer-principal">
            <?php include __DIR__.'/footer.php'?>
        </footer class="footer-principal">
    </body>
</html>
