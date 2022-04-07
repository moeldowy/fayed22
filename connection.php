<?php
//dsn=> Data Source Name 'DBdriver'
try{
    $dsn='mysql:dbname=fayeddb;host=localhost';
    $username='root';
    $password='';
    $connection= new PDO($dsn,$username,$password);
}catch(PDOException $exception){
    echo $exception->getMessage();
}