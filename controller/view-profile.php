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

    $files_absolute_path = '/home/TDIW/tdiw-a1/public_html/fitxers/';
    $files_public_path = '/fitxers/';
    $id = 22;

    if (true /**hay log **/)
    {
        if (!isset($_POST['hide_input']) || empty($_POST['hide_input']))
        {
            $profile = getProfile($connection, $id);
            require_once __DIR__.'/../view/view-profile.php';
        }
        else
        {
            /** Copy controller register.php 21-25 or more lines ... */
            if($_POST['pswd'] == '' && $_POST['repeat_pswd'] == '' ||
                $_POST['pswd'] != '' && $_POST['repeat_pswd'] != '' && $_POST['pswd'] === $_POST['repeat_pswd'])
            {
                /** $id = getId(); */
                if ($_POST['pswd'] == '' || $_POST['repeat_pswd'] == '')
                {
                    $_POST['pswd'] = '';
                    $_POST['repeat_pswd'] = '';
                }
                else
                {
                    $_POST['pswd'] = password_hash($_POST['pswd'], PASSWORD_BCRYPT);
                }
                modifReg($connection, $id);
                if (isset($_FILES['reup_profile_image']) && !empty($_FILES['reup_profile_image']))
                {
                    $path = $files_absolute_path . getImageName($connection, $id);
                    $ok = move_uploaded_file($_FILES['reup_profile_image']['tmp_name'], $path);
                    if($ok != 0)
                    {
                        echo "Error number: " . $_FILES['reup_profile_image']['error'];
                        die;
                    }
                }
                $_POST['hide_input'] = '';
                header('Location: http://tdiw-a1.deic-docencia.uab.cat/index.php'); 
            }
            else
            {
                header('Location: http://tdiw-a1.deic-docencia.uab.cat/view/view-profile.php');
            }
        }
    }

