<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script src="/view/scripts.js"></script>
        <link rel="stylesheet" type="text/css" href="/view/estilo.css">
        <style> header, body { text-align: center} </style>
        <title>PortatilBarato</title>
    </head>
    <body>
        <header>
            <a href="/"><h1>PortatilBarato</h1></a>
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
    </body>
</html>