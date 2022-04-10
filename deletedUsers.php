<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php  require_once "nav.php"?>
<hr>
<?php
//Get All Users From TABLE users With You successful Connection
require_once "connection.php";
require_once "User.php";
$select=$connection->prepare('SELECT * FROM users WHERE status=?');
$select->execute([0]);
$users=$select->fetchAll(PDO::FETCH_CLASS,'User');
if($users){
?>
    <h4>All Users</h4>
    <table border="2">
        <thead>
        <th>ID</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Status</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php foreach ($users as $user):?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->email?></td>
                <td><?=$user->username?></td>
                <td><?=$user->password?></td>
                <td><?=$user->gender?></td>
                <td><?=$user->age?></td>
                <td><?=($user->showStatus())?"":"<i class='material-icons' style='color: darkred'>toggle_on</i>";?></td>
                <td><div style="padding:5px;">
                        <!-- Delete Icon (Permanently Delete)-->
                        <a href="delete.php?id=<?=$user->id?>"><i class="material-icons" id="delete">
                                delete_outline
                            </i></a>
                        <!-- Update Icon-->
                        <a href="restore.php?id=<?=$user->id?>"><i class="material-icons" id="edit">
                                settings_backup_restore
                            </i></a></div></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<?php }else{
    echo "There is no user in That Bin";
}?>
</body>
</html>