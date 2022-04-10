<?php
require_once "connection.php";
$id=$_POST["id"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=password_hash($_POST["password"],PASSWORD_DEFAULT);
$gender=$_POST["gender"];
$age=$_POST["age"];
$update=$connection->prepare("UPDATE users SET email=?,username=?,password=?,gender=?,age=? WHERE id =?");
$update->execute([$email,$username,$password,$gender,$age,$id]);
header("Location: users.php");
