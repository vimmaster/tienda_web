<!DOCTYPE html>
<html lang= "es">
    <head>
        <?php include __DIR__.'/head.php'; ?>
        <style> header, body{text-align: center}</style>
    </head>
    <body>
        <header>
            <a href="/controller/list-categories.php"><h1>PortatilBarato</h1></a>
        </header>
        <section>
            <div id="formDiv" >
                <form name="login_form" action="/controller/login.php" onsubmit="checkLogin();"
                      method="post" autocomplete="off">
                    Correu:<input type="email" name="mail" required><br/>
                    Password:<input type="password" name="pswd" required><br/>
                    <input type="submit" name="ENVIAR">
                </form>
            </div>
        </section>
        <footer class="footer-principal">
            <?php include __DIR__.'/footer.php' ?>
        </footer class="footer-principal">
    </body>
</html>