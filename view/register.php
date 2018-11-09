<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PC-Sales</title>
    <script text="text/javascript" src="/view/scripts.js"></script>
</head>
<header>
    <hr>
    <a href="http://tdiw-a1.deic-docencia.uab.cat/"><h1>PC-Sales</h1></a>
</header>
<body>
<section>
    <div id="formDiv" >
        <form name="register_form" action="http://tdiw-a1.deic-docencia.uab.cat/controller/register.php" onsubmit="return checkRegister();" method="post" autocomplete="on">
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