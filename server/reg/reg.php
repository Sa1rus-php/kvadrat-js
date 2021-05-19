<?php
require_once '../inc/bd.php';
$series = $_POST['series'];
$num = $_POST['num'];
$date = $_POST['date'];
if(isset($_POST['submit']))
{
    $err = [];

    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    $sql="SELECT user_id FROM users WHERE user_login = '". $_POST['login']."'";
    $stmt= $bd->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    if(count($err) == 0)
    {

        $login = $_POST['login'];

        $password = md5(md5(trim($_POST['password'])));
        $reg_pass = $bd->prepare("INSERT INTO `passport` (`id`, `series`, `num`, `date`) VALUES (NULL, '$series', '$num', '$date')");
        $reg_pass->execute();
        $sql="INSERT INTO users SET user_login='".$login."', user_password='".$password."', user_fio='".$_POST['full_name']."'";
        $reg=$bd->prepare($sql);
        $reg->execute();
        $id = $bd->lastInsertId();
        $reg_id = $bd->prepare("INSERT INTO `passport` (`id`) VALUES ('$id')");
        $reg_id->execute();
        header("Location: ../aunt/aunt_form.php");
        exit();
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>