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
        <a href="/"><h1>PortatilBarato</h1></a>
        <a href="../controller/login.php"><h2 class="right">LOG-IN</h2></a>
        <a href="../controller/register.php"><h2 class="right">REGISTER</h2></a>
        <button id="button-profile"><i class="fas fa-user-circle"> </i></button>
        <div id="panel-profile">
            <div> Login</div>
            <div> Register</div>
        </div>
    </header>
    <section id="1">
        <div class="grid-container">

            <?php foreach ($categorias as $categoria): ?>

                <div id="<?php echo $categoria['ID']?>" class="grid-item categ-item">
                    <?php echo $categoria['Nombre'] ?></div>

            <?php endforeach; ?>

        </div>
    </section>
    <footer>
        <h4> &copy PC-SALES: created by Xavier Molina and Ricard Sanchez</h4>
    </footer>
</body>
</html>