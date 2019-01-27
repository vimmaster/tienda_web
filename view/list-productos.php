<!DOCTYPE html>
<html>
    <head>
        <?php __DIR__.'/head.php' ?>
    </head>
    <body>
        <header>
            <?php include __DIR__.'/../controller/headerController.php' ?>
        </header>
        <section>
            <?php /** Este div se carga con jQuery sino se va por action */ ?>
            <div id="products-grid" class="grid-container">
                <?php foreach ($productos as $producto): ?>
                    <div id="<?php echo $producto['ID']?>" class="grid-item">
                        <h3 class="product-item"><?php echo $producto['Nombre'] ?></h3>
                        <img class="product-item" src="<?php echo $producto['Imagen']?>">
                        <div class="product-item"><?php echo $producto['Precio']?>$</div>
                    <!--    <button> Añadir a la cesta</button>  -->
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <footer>
        <?php include __DIR__.'/footer.php'?>
    </footer>
    </body>
</html>