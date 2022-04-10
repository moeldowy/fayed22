<?php
require_once "connection.php";
$id=$_GET['id'];
$update=$connection->prepare("UPDATE users SET status=? WHERE id=?");
$update->execute([0,$id]);
header("Location: users.php");