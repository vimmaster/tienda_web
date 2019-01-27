<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script src="/view/scripts.js"></script>
        <link rel="stylesheet" type="text/css" href="/view/estilo.css">
        <title>PortatilBarato</title>
    </head>
    <body>
        <header>
            <a href="/"><h1>PortatilBarato</h1></a>
        </header>
        <section>
            <div id="formDiv" >
                <form id="edit_profile_form" class="form-style1" action="/controller/view-profile.php"
                      onsubmit="return checkEditProfile();" method="post" enctype="multipart/form-data"
                      autocomplete="off">

                    Nom Complet:<input type="text" name="name" placeholder="<?php echo
                    $profile['Nombre']?>"><br>
                    <p> Imagen </p>
                    <img src="<?php echo $files_public_path . $profile['Imagen']?>"
                         class="img-style1" alt="<?php echo $profile['Nombre'] ?>"> <br>
                    Cambiar Imagen: <input type="file" name="reup_profile_image"><br>
                    Direccion: <input type="text" name="address" size="30" maxlength='30'
                                      placeholder="<?php echo $profile['Direccion'] ?>"><br>
                    Población: <input type="text" name="town" size="30" maxlength="30"
                                      placeholder="<?php echo $profile['Poblacion'] ?>"><br>
                    Codigo Postal: <input type="text" name="cp" size="5" maxlength='5' pattern="[0-9]{5}"
                                         title="Solo están permitidos 5 números" placeholder=
                                          "<?php echo $profile['Codigo-postal'] ?>"><br> <!-- "ˆ\d{5}$" -->
                    Correu:<input type="email" name="mail" placeholder="<?php echo
                    $profile['Email']?>"><br>
                    <input name="user" style="display:none" type="text" />
                    <input name="password" style="display:none" type="password" />
                    <p> La contraseña no puede ser mostrada, cambiala si es de tu parecer </p>
                    Contraseña:<input id="pswd" type="password" name="pswd" pattern="[a-zA-Z0-9]{10,}"
                                              title="Solo letras y numeros, mínimo 10 caracteres" ><br>
                    Repite contraseña:<input id="repeat_pswd" type="password" name="repeat_pswd"
                                             pattern="[a-zA-Z0-9]{10,}" title="Solo letras y numeros,
                                              mínimo 10 caracteres"><br>
                    <input id="hide_input" name="hide_input" style="display:none" value="form_send" />

                    <input type="submit" name="ENVIAR">
                </form>
            </div>
        </section>
    </body>
</html>
