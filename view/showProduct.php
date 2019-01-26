
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

        <section>
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
        <footer>
            <hr>
            <?php include __DIR__.'/footer.php'?>
        </footer>
    </body>
</html>

