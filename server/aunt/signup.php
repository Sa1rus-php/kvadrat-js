<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $series = $_POST['series'];
    $num = $_POST['num'];
    $date = $_POST['date'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
if(!empty($password) && !empty($password_confirm) ){
    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        $password = md5($password);
        $reg_pass = $connect->prepare("INSERT INTO `passport` (`id`, `series`, `num`, `date`) VALUES (NULL, '$series', '$num', '$date')");
        $reg_pass->execute();
        $reg = $connect->prepare("INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
        $reg->execute();
        $id = $connect->lastInsertId();
        $reg_id = $connect->prepare("INSERT INTO `passport` (`user_id`) VALUES ('$id')");
        $reg_id->execute();
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
} else{
    $_SESSION['message'] = 'Вы что-то не указали';
    header('Location: ../register.php');

}



