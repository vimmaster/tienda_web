<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 24/01/2019
 * Time: 18:29
 */
?>

<!DOCTYPE html>
    <head>
        <title>portatilbarato.com</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/view/estilo.css">
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
            <?php foreach($bills as  $id => $bill): ?>
                <p>Pedido realizado el <?php echo $bill[0]['fecha'] ?> </p>
                <ul>
                <?php foreach($bill as $product): ?>
                    <li><?php echo $product['cantidad']?> <?php echo $product['Nombre'] ?> encargados </li>
                <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </section>
        <footer>
            <hr>
            <h4>Contraseña: ricard@outlook.es => 1234567890</h4>
            <h4> <?php include __DIR__.'/footer.php' ?> </h4>
        </footer>
    </body>
