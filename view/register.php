<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include __DIR__.'/head.php' ?>
        <style> header, body { text-align: center} </style>
    </head>
    <body>
        <header>
            <a href="/controller/list-categories.php"><h1>PortatilBarato</h1></a>
        </header>
        <section>
            <div id="formDiv" >
                <form name="register_form" action="/controller/register.php" onsubmit="return checkRegister();"
                     method="post" enctype="multipart/form-data" autocomplete="off">

                    Nom Complet:<input type="text" name="name" required><br>
                    Foto de perfil: <input type="file" name="profile_image"><br>
                    Direccion: <input type="text" name="address" size="30" maxlength='30' ><br>
                    Población: <input type="text" name="town" size="30" maxlength="30"> <br>
                    Codigo Postal: <input type="text" name="cp" size="5" maxlength='5' pattern="[0-9]{5}"
                     title="Solo están permitidos 5 números"><br> <!-- "ˆ\d{5}$" -->
                    Correu:<input type="email" name="mail" required><br>
                    <input name="user" style="display:none" type="text" />
                    <input name="password" style="display:none" type="password" />
                    Password:<input type="password" name="pswd" pattern="[a-zA-Z0-9]{10,}"
                                    title="Solo letras y numeros, mínimo 10 caracteres" required><br>
                    Repeteix password:<input type="password" name="repeat_pswd" pattern="[a-zA-Z0-9]{10,}"
                                    title="Solo letras y numeros, mínimo 10 caracteres" required><br>

                    <input type="submit" name="ENVIAR">
                </form>
            </div>
        </section>
        <footer class="footer-principal">
            <?php include __DIR__.'/footer.php' ?>
        </footer class="footer-principal">
    </body>
</html>