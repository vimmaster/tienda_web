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
    <body>
        <header>
            <?php include __DIR__.'/header.php'?>
        </header>
        <section>
            <div id="product-grid" class="grid-container">

                <div class="grid-item"><?php echo $product['Nombre']?> </a></div>


                <div class="grid-item"><?php echo $product['Descripcion'] ?></div>


                <div class="grid-item"> <img src="<?php echo $product['Imagen']?>"></div>

                <div class="grid-item"><button>Añadir a la cesta </button></div>

            </div>
        </section>
        <footer>
            <hr>
            <h4> &copy PC-SALES: created by Xavier Molina and Ricard Sanchez</h4>
        </footer>
    </body>
</html>
