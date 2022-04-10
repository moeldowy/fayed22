<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once "nav.php";
require_once "connection.php";
require_once "User.php";
$id=$_GET['id'];
$select = $connection->prepare("SELECT * FROM users WHERE id=?");
$select->execute([$id]);
$select->setFetchMode(PDO::FETCH_CLASS,"User");
$user=$select->fetch();
?>
<hr>
<h4>Add New User:</h4>
<pre>
<?php
//var_dump($_SERVER);
?>
</pre>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?=$user->id?>">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?=$user->email?>"><br><br>
    <label for="username">username</label>
    <input type="text" id="username" name="username" value="<?=$user->username?>"><br> <label for="password">Password</label>
    <input type="password" id="password" name="password"><br> <br>
    <label >Gender</label>
    <input type="radio" id="male" name="gender" value="male" <?= (($user->gender)=='male')?"checked":"";?>>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female"
        <?= (($user->gender)=='female')?"checked":"";?>><label for="female">Female</label>
    <br><br></br> <label for="age">Age</label>
    <input type="number" id="age" name="age" value="<?=$user->age?>"><br><br>
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