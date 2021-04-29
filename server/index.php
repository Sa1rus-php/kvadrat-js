<?php
include 'pdo.php';
if (isset($_GET['delete'])) {
    $stmm = $connection->prepare("DELETE FROM `users` WHERE `id` = :id");
    $stmm->bindValue(':id', $_GET['delete']);
    $stmm->execute();

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark   bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Rekhlitskiy</span>
    </div>
</nav>
<h2>Команда INSERT</h2>
<form class="row g-3" action="index.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <label for="name" class="visually-hidden">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <label for="surname" class="visually-hidden">Surname</label>
                <input type="text" class="form-control" name="surname" placeholder="Surname">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <label for="age" class="visually-hidden">Age</label>
                <input type="text" class="form-control" name="Age" placeholder="Age">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                <button type="reset" class="btn btn-primary mb-3">Reset</button>
            </div>
        </div>
    </div>
</form>

<?php
$insertsql = "INSERT INTO `users` (`Name`, `Surname` ,`Age` ) VALUES ('{$_POST['name']}', '{$_POST['surname']}', '{$_POST['Age']}')";
$connection->query($insertsql);
$stm = $connection->prepare("SELECT * FROM users WHERE id > :id");
$stm->bindValue(':id', 1);
$stm->execute();
$list = $stm->fetchAll(PDO::FETCH_OBJ);

?>
<h2>Команда SELECT</h2>
<?php
$sql = "SELECT id, name, surname, age FROM users";
// Подготовка запроса
$statement = $connection->prepare($sql);
// Выполняем запрос
$statement->execute();
// Получаем массив строк
$result_array = $statement->fetchAll();
?>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    <?php foreach ($result_array as $result_row): ?>
    <tr>
        <td> <?php echo $result_row["id"] ?> </td>
        <td> <?php echo $result_row["name"] ?> </td>

        <td> <?php echo $result_row["surname"] ?> </td>

        <td> <?php echo $result_row["age"] ?> </td>

        <td>
            <a href="index.php?delete=<?php echo $result_row["id"] ?>">Delete</a>
        </td>
    </tr>

<?php endforeach ?>
</table>
<h2>Команда UPDATE</h2>
<form class="row g-3" action="change.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <label for="users_id" class="visually-hidden">ID: </label>
                <input type="number" class="form-control" name="users_id" placeholder="ID">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <label for="users_name" class="visually-hidden">Name: </label>
                <input type="text" class="form-control" name="users_name" placeholder="name">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <label for="users_surname" class="visually-hidden">Surname: </label>
                <input type="text" class="form-control" name="users_surname" placeholder="Surname">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <label for="users_age" class="visually-hidden">Age: </label>
                <input type="text" class="form-control" name="users_age" placeholder="Age">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                <button type="reset" class="btn btn-primary mb-3">Reset</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>