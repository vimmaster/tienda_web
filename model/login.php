

<?php
/**
 * Created by PhpStorm.
 * User: ricar_xuzvwqa
 * Date: 29/10/2018
 * Time: 13:15
 */

//require_once __DIR__.'/connectDB.php';

function login($connexio)
{

    try {

        //$hashPassword = password_hash($_POST['pswd'], PASSWORD_DEFAULT);

        $password = $_POST['pswd'];

        /*$hash = $connexio->prepare('SELECT u.Password FROM Usuario u WHere Email = :email');
        $mail2 = $_POST['mail'];
        $hash->bindValue('email' , $mail2);
        $hash->execute();
        //$hash->fetchColumn(PDO::FETCH_ASSOC);
        $resultadoConsulta = $hash->fetchColumn(PDO::FETCH_ASSOC);*/

        $hash = 'SELECT Usuario.Password FROM Usuario WHERE Email = :email';
        $stmt = $connexio->prepare($hash);

        $stmt -> execute ( ['email' => $_POST['mail'] ]);

        $usuario = $stmt->fetchAll();

        //echo $usuario[0]['Password'];



        if (!password_verify($password, $usuario[0]['Password'])) {
            echo "Credenciales incorrectas";
            exit;
        }

        //$sql = 'SELECT * FROM Usuario WHERE Email = $email';
        $sql = $connexio->prepare('SELECT u.ID FROM Usuario u WHERE Email = :email');
        $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
        $sql->bindValue('email' , $mail);
        //$stmt = $connexio->prepare($sql);

        $sql->execute(
            /*[
                'email' => $_POST['mail']
            ]*/
        );
        echo "Credenciales correctas";
        //echo '<pre>'; print_r($sql->fetch(PDO::FETCH_ASSOC)); die;
        return $sql->fetchAll(PDO::FETCH_ASSOC);


    } catch (PDOException $exception) {
        print $exception->getMessage();
    }
}

?>
   <!--


    /*if(isset($_POST['Email'])){

        $email = stripslashes($_REQUEST['Email']);
        $email = htmlentities($email, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $password = stripslashes($_REQUEST['Password']);

        //$conn = connectDB();
        $sql = $connexio->prepare("SELECT * FROM Usuario WHERE Email='$email'");
        $result = $sql;//$connexio->query($sql);
        $rows = mysqli_num_rows($result);


        if($rows == 0){
            echo '<p class="login">Usuario o contraseña incorrectos.</p>';
            exit;
        }else{
            while($row = $result->fetch_assoc()){
                $user = $row;
            }

            if (!password_verify($password, $user["Contraseña"])) {
                echo '<p class="login">Usuario o contraseña incorrectos.</p>';
                exit;
            }
            else {
                $_SESSION['Email'] = $email;
                if($user['Admin'] == '1'){
                    $_SESSION['admin'] = true;
                }
                //header("Location:./index.php");
            }
        }


    }
    */
}

-->