<?php
include 'pdo.php';

$id = $_POST['users_id'];
$name = $_POST['users_name'];
$surname = $_POST['users_surname'];
$age = $_POST['users_age'];
if(empty($id)){
    echo "Вы не задали ID строки для обновления данных!";
    return;
}


$update_columns = array();
if(trim($name) !== "")   { $update_columns[] = "name = :name"; }
if(trim($surname) !== "")  { $update_columns[] = "surname = :surname"; }
if(trim($age) !== "")   { $update_columns[] = "age = :age"; }

if(sizeof($update_columns > 0)){
    $sql = "UPDATE users SET " . implode(", ", $update_columns) . " WHERE id=:id";
    $statement = $connection->prepare($sql);

    $statement->bindParam(":id", $id);
    if(trim($name) !== ""){
        $statement->bindParam(":name", $name);
    }

    if(trim($surname) !== ""){
        $statement->bindParam(":surname", $surname);
    }

    if(trim($age) !== ""){
        $statement->bindParam(":age", $age);
    }
    $statement->execute();

    echo "Запись c ID: " . $id . " успешно обновлена!";
}
?>
<a href="index.php"><h1>HOME PAGE</h1></a>
