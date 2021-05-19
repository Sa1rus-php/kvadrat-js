<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"></script>
    <link rel="stylesheet" href="../css/main.css">
    <title>Rekhlitskiy</title>
</head>
<body>
<form class="row g-3" action="reg.php" method="POST">
    <div class="container">
        <div class="row">
    <input name="login" type="text" placeholder="Login" required ><br>
        <pre>   </pre>
    <input name="password" type="password" placeholder="Password" required><br>
        <pre>   </pre>
        <input type="text" name="full_name" placeholder="Введите свое ФИО">
        <pre>   </pre>
        <input type="text" name="series" placeholder="Введите серию паспорта">
        <pre>   </pre>
        <input type="text" name="num" placeholder="Введите номер паспорта">
        <pre>   </pre>
        <input type="text" name="date" placeholder="Введите дату выдачи">
        <pre>   </pre>
    <button type="submit" class="btn btn-outline-primary" name="submit">Sign up</button>
        </div>
        </div>
</form>
</body>
</html>