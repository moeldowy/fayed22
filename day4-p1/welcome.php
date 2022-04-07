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
        <?php
            $email=$_POST['email'];
            /*$pattern="/^[A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}\._-]+@([A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}]{1,2}|[A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}]((?<!(\.\.))[A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}.-])+[A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}])\.[A-Za-z\x{0430}-\x{044F}\x{0410}-\x{042F}]{2,}$/iu";
        $match=preg_match($pattern,$email);
        var_dump($match);*/
        $match = filter_var($email,FILTER_VALIDATE_EMAIL);

        if($match){?>
            <h1>Welcome<?php
                foreach ($_POST as $key=>$value){
                    if(is_array($value)){
                        echo $key.": ";
                        foreach ($value as $element){
                            echo pure($element);
                        }
                    }else{
                        echo "<br>".$key.": ".pure($value)."<br>";
                    }
                }
                ?></h1>
        <?php }else{
            //header("Location: User.php");
            echo "Write Correct Email";
            header("Refresh: 6;URL=User.php");
        }
        function pure($input){
            $input=trim($input);
            $input=stripslashes($input);
            $input=htmlspecialchars($input);
            return $input;
        }
        ?>

    </div>
</body>
</html>


