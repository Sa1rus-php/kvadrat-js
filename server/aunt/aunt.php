<?php
require_once '../inc/bd.php';
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}


if(isset($_POST['submit']))
{
    $sql="SELECT user_id, user_password FROM users WHERE user_login='".$_POST['login']."' limit 1";
    $lg=$bd->prepare($sql);
    $lg->execute();
    $data = $lg->fetch(PDO::FETCH_ASSOC);

    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
        header("Location: ../check.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
