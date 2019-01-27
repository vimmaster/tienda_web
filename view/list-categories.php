<!DOCTYPE html>
<html>
    <head>
        <?php include __DIR__.'/head.php'; ?>
    </head>
    <body>
        <header>
            <?php include __DIR__.'/../controller/headerController.php' ?>
        </header>
        <section id="1">
            <div>
                <div class="grid-container">

                    <?php foreach ($categorias as $categoria): ?>

                        <div id="<?php echo $categoria['ID']?>" class="grid-item categ-item">
                            <h3><?php echo $categoria['Nombre'] ?></h3>
                            <img src="<?php echo $categoria['Imagen']?>">

                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <footer>
            <?php include __DIR__.'/footer.php'?>
        </footer>
    </body>
</html>