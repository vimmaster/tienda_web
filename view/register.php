<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="/view/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="/view/estilo.css">
    <style> header, body { text-align: center} </style>
    <title>PC-Sales</title>
</head>
<header>
    <hr>
    <a href="http://tdiw-a1.deic-docencia.uab.cat/"><h1>PC-Sales</h1></a>
</header>
<body>
<section>
    <div id="formDiv" >
        <form name="register_form" action="/controller/register.php" onsubmit="return checkRegister();" method="post"
              autocomplete="off">
            Nom Complet:<input type="text" name="name" required><br>
            Correu:<input type="email" name="mail" required><br>
            Password:<input type="password" name="pswd" required><br>
            Repeteix password:<input type="password" name="repeat_pswd" required><br>

            <input type="submit" name="ENVIAR">
        </form>
    </div>
</section>
</body>
</html>