<!DOCTYPE html>
<html lang= "es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/view/estilo.css">
        <script type="javascript" src="./scripts.js"></script>
        <style> header, body{text-align: center}</style>
        <title>PC-Sales</title>
    </head>
    <body>
        <header>
            <a href="/"><h1>PortatilBarato</h1></a>
        </header>
        <section>
            <div id="formDiv" >
                <form name="login_form" action="/controller/login.php" onsubmit="checkLogin();"  method="post" autocomplete="off">
                    Correu:<input type="email" name="mail" required><br/>
                    Password:<input type="password" name="pswd" required><br/>
                    <input type="submit" name="ENVIAR">
                </form>
            </div>
        </section>
    </body>
</html>