<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PC-Sales</title>
    <link rel="stylesheet" type="text/css" href="http://tdiw-a1.deic-docencia.uab.cat/view/css/estilo.css">
</head>
<header>
    <hr>
    <a href="../index.php"><h1>PC-Sales</h1></a>
</header>
<body>
    <section>
        <div id="formDiv" >
            <form method="post" action="" onsubmit="return confirmaRegistre();">
                Nom Complet:<input type="text" name="nom"><br/>
                Correu:<input type="text" name="mail"><br/>
                Password:<input type="text" name="pswd"><br/>
                Repeteix password:<input type="text" name="rpswd"><br/>

                <input type="submit" name="ENVIAR">
            </form>
        </div>
    </section>
</body>
</html>