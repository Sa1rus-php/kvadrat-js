<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>OOP</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Rekhlitskiy</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<form class="row g-3" action="class.php" method="post">
    <div class="row gy-2">
    <div class="col-auto">
    <label for="name" class="visually-hidden">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    </div>
    <div class="row gy-2">
    <div class="col-auto">
    <label for="surname" class="visually-hidden">Surname</label>
    <input type="text" class="form-control" name="surname" placeholder="Surname">
    </div>
    </div>
    <div class="row gy-2">
    <div class="col-auto">
        <label for="age" class="visually-hidden">Age</label>
        <input type="text" class="form-control" name="age" placeholder="Age">
    </div>
    </div>
    <div class="row gy-2">
    <div class="col-auto">
        <label class="input-group-text" name="gender">Gender</label>
        <select class="form-select" name="gender">
            <option selected>Choose...</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    </div>
    <div class="row gy-2">
    <div class="col-auto">
        <label for="Salary" class="visually-hidden">Salary</label>
        <input type="text" class="form-control" name="salary" placeholder="Salary">
    </div>
    </div>
    <div class="row gy-2">
    <div class="col-auto">
        <label for="Driving" class="visually-hidden">Driving</label>
        <input type="text" class="form-control" name="driving" placeholder="Driving">
    </div>
    </div>
    <div class="row gy-2">
    <div class="col-auto">
        <label class="input-group-text" name="category">Category</label>
        <select class="form-select" name="category">
            <option selected>Choose...</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
    </div>
    </div>
    <div class="row gy-2">
    <div class="col-auto">
        <button type="submit" class="btn btn-outline-dark">Confirm identity</button>
        <button type="reset" class="btn btn-outline-dark">Reset</button>
    </div>
    </div>
</form>
</body>
</html>