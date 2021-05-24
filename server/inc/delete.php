<?php
include 'bd.php';
$deleteId = $_POST['deleteId'];
$sth = $bd->prepare('DELETE FROM users WHERE id:id');
$sth->bindValue(':id' , $deleteId);
$sth->execute();