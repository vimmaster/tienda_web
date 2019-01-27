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
        <?php include __DIR__.'/head.php' ?>
    </head>
    <body>
        <header>
            <?php include __DIR__.'/../controller/headerController.php' ?>
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
        <footer class="footer-principal">
            <?php include __DIR__.'/footer.php' ?>
        </footer class="footer-principal">
    </body>
