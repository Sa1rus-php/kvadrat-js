<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<?php
require_once './inc/bd.php';

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
    $sql = "SELECT * FROM users WHERE user_id ='" . intval($_COOKIE['id']) . "' LIMIT 1";
    $prov = $bd->prepare($sql);
    $prov->execute();
    $userdata = $prov->fetch(PDO::FETCH_ASSOC);

    if (($userdata['user_id'] !== $_COOKIE['id'])) {
        setcookie("id", "", time() - 3600 * 24 * 30 * 12, "/");
        echo "Хм, что-то не получилось";
    } else {
        echo "Привет, " . $userdata['user_login'] . ". Всё работает!";
        echo "<pre></pre>";
        include './inc/postr.php';
        echo "<a href='logout.php'><button type='button' class='btn btn-outline-primary' name='submit'>Exit</button></a>";
    }
} else {
    echo "Включите куки";
}
