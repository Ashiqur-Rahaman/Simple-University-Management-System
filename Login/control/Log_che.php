<?php
include('../Entity/Log_ent.php');
include('../Repo/cred_repo.php');

$login = new Login();

$UserNameError = $PasswordError = "";
$flag = true;

if (isset($_POST['submit'])) {

    if (empty($_POST["username"])) {
        $UserNameError = "Enter Your UserName";
        $flag = false;
    } else {
        $username = $_POST["username"];
        $login->setUsername($username);
    }

    if (empty($_POST["password"])) {
        $PasswordError = "Enter Your Password";
        $flag = false;
    } else {
        $password = $_POST["password"];
        $login->setPassword($password);
    }

    if ($flag) {
        $cred = new Credential();
        $entity = $cred->Get($login);
        if ($entity != null) {
            $cookie_name = "email";
            $cookie_value = $entity->getEmail();
            setcookie($cookie_name, $cookie_value, time() + (180), "/");

            $_SESSION["email"] = $entity->getEmail();
            $_SESSION["id"] = $entity->getId();
            $_SESSION["UserType"] = $entity->getType();
            if ($entity->getType() == 'teacher') {
                // header("Refresh:0;url= Teacher_Home.php");
                header("Refresh:0;url= Teacher_Profile.php");
            } else if ($entity->getType() == 'admin') {
                header("Refresh:0;url= ../Forms/adminpro.php");
            }
        } else {
            echo 'No such user !';
        }
    } else {
        $db_error = "FILL ALL FIELDS";
    }
}
