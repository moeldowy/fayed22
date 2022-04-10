<?php
require_once "connection.php";
$id=$_GET['id'];
$delete=$connection->prepare("DELETE FROM users WHERE id=?");
$delete->execute([$id]);
header("Location: deletedUsers.php");