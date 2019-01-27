<?php
/**
 * Created by PhpStorm.
 * User: Ricard Sanchez
 * Date: 21/01/2019
 * Time: 9:49
 */

    require_once __DIR__.'/../model/connectDB.php';
    require_once __DIR__.'/../model/view-profile.php';
    $connect_obj = ConnectDB::getInstance();
    $connection = $connect_obj->getConnection();
    session_start();
    $files_absolute_path = '/home/TDIW/tdiw-a1/public_html/fitxers/';
    $files_public_path = '/fitxers/';


    // echo '<pre>'; print_r($_SESSION['ID']); die;
    $id = $_SESSION['ID'][0]['ID'];
    if (!isset($_POST['hide_input']) || empty($_POST['hide_input']))
    {
        $profile = getProfile($connection, $id);
        require_once __DIR__.'/../view/view-profile.php';
    }
    else
    {
        if($_POST['pswd'] == '' && $_POST['repeat_pswd'] == '' ||
            $_POST['pswd'] != '' && $_POST['repeat_pswd'] != '' &&
            $_POST['pswd'] === $_POST['repeat_pswd'])
        {
            if ($_POST['pswd'] == '' || $_POST['repeat_pswd'] == '')
            {
                $_POST['pswd'] = '';
                $_POST['repeat_pswd'] = '';
            }
            else
            {
                $_POST['pswd'] = password_hash($_POST['pswd'], PASSWORD_BCRYPT);
            }

            $_POST['mail'] = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
            $_POST['pswd'] = filter_var($_POST['pswd'], FILTER_SANITIZE_STRING);
            $_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $_POST['address'] = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
            $_POST['town'] = filter_var($_POST['town'], FILTER_SANITIZE_STRING);
            $_POST['cp'] = filter_var($_POST['cp'], FILTER_VALIDATE_REGEXP, array("options"=>
                array("regexp" => "^\d{5}(?:[-\s]\d{4})?$^")));

            modifReg($connection, $id);
            if (isset($_FILES['reup_profile_image']) && !empty($_FILES['reup_profile_image']))
            {
                $path = $files_absolute_path . getImageName($connection, $id);
                $ok = move_uploaded_file($_FILES['reup_profile_image']['tmp_name'], $path);
                if($ok != 0 && $ok != 1)
                {
                    echo "Error number: " . $_FILES['reup_profile_image']['error'];
                    die;
                }
            }
            $_POST['hide_input'] = '';
            header('Location: http://tdiw-a1.deic-docencia.uab.cat/index.php');
            exit;
        }
        else
        {
            header('Location: http://tdiw-a1.deic-docencia.uab.cat/view/view-profile.php');
        }
    }

