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
/*$x=6;
echo ($x==5)?"Yes":"No";*/
//Get All Users From TABLE users With You successful Connection
require_once "connection.php";
require_once "User.php";
$select=$connection->prepare('SELECT * FROM users WHERE status=?');
$select->execute([1]);
$users=$select->fetchAll(PDO::FETCH_CLASS,'User');?>
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
            <td><?=($user->showStatus())?"<i class='material-icons' style='color: darkgreen'>toggle_on</i>":"";?></td>
            <td><div style="padding:5px;">
                    <!-- Delete Icon (Soft Delete -> Update status from 1 : 0)-->
                    <a href="softDelete.php?id=<?=$user->id?>"><i class="material-icons" id="delete">
                            delete_outline
                        </i></a>
                    <!-- Update Icon-->
                    <a href="edit.php?id=<?=$user->id?>"><i class="material-icons" id="edit">
                            draw
                        </i></a></div></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<hr>
<h4>Add New User:</h4>
<pre>
<?php
//var_dump($_SERVER);
?>
</pre>
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <label for="email">Email</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="username">username</label>
    <input type="text" id="username" name="username"><br> <label for="password">Password</label>
    <input type="password" id="password" name="password"><br> <br>
    <label >Gender</label>
    <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
    <br><br></br> <label for="age">Age</label>
    <input type="number" id="age" name="age"><br><br>
    <input type="submit" value="Send">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $_POST=array_flip($_POST);
    if(!array_key_exists('',$_POST)){
        $_POST=array_flip($_POST);
        function pure($input){
            $input=trim($input);
            $input=stripslashes($input);
            $input=htmlspecialchars($input);
            return$input;
        }
        $email=pure($_POST['email']);
        $email=filter_var($email,FILTER_VALIDATE_EMAIL);
        $username=pure($_POST['username']);
        $password=pure($_POST['password']);
        $gender=pure($_POST['gender']);
        $age=pure($_POST['age']);
        $HashedPassword=password_hash($password,PASSWORD_DEFAULT);
        //To Avoid SQL injection Use placeholder (?) instead of giving prepare method direct values
        $insert=$connection->prepare('INSERT INTO users (email,username,password,gender,age)VALUES(?,?,?,?,?)');
        $insert->execute([$email,$username,$HashedPassword,$gender,$age]);

        header("Location: users.php");
    }else{
        echo "Please Fill All inputs";
    }
}
?>
</body>
</html>