<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome<?php
              $username=$_GET['username'];
              $city=$_GET['city'];
              echo htmlspecialchars($username);
              function pure($input){
                  $input=trim($input);
              }
            ?></h1>
    </div>
</body>
</html>
