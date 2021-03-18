
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Rekhlitskiy</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">Rekhlitskiy</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="upload.php">Upload link</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="files" />
    <br />
    <br />
    <button type="submit" class="btn btn-dark">Отправить форму (Send)</button>
</form>
<?php
if ($_FILES && $_FILES["filename"]["error"] == UPLOAD_ERR_OK)
{
    $name = "../download/" . $_FILES["files"]["name"];
    move_uploaded_file($_FILES["files"]["tmp_name"], $name);
    echo "<br />Файл загружен";
}
?>
<br />
<a href="ltf.php">List txt files</a>
</body>
</html>