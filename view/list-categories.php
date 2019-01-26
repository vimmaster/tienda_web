<!--
<!DOCTYPE html>
<html>
    <head>
        <title>portatilbarato.com</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/view/css/estilo.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
              integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
              crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="/view/scripts.js"></script>
    </head>

    -->

    <body>

        <section id="1">
            <div>
                <div class="grid-container">

                    <?php foreach ($categorias as $categoria): ?>

                        <div id="<?php echo $categoria['ID']?>" class="grid-item categ-item">
                            <h3><?php echo $categoria['Nombre'] ?></h3>
                            <img class="product-item" src="<?php echo $categoria['Imagen']?>">

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