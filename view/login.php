<!DOCTYPE html>
<html lang= "es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/view/css/estilo.css">
    <script src="scripts1.js"></script>
    <style> header, body{text-align: center}</style>
    <title>PC-Sales</title>
</head>
<header>
    <a href="../controller/list-categories.php"><h1>PC-Sales</h1></a>
</header>
<body>
    <section>
        <div id="formDiv" >
            <form name="login_form" action="/controller/login.php" onsubmit="return checkLogin();"  method="post" autocomplete="off">
                Correu:<input type="email" name="mail" required><br/>
                Password:<input type="password" name="pswd" required><br/>
                <input type="submit" name="ENVIAR">
            </form>
        </div>
    </section>
</body>
</html>