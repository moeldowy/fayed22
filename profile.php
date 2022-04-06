<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<!-- bootstrap user profile -->
<div class="container">
    <div class="row">
        <div class="col-md-12 px-5 py-5">
            <div class="user-profile">
                <div class="d-flex">
                    <div>
                        <?php
                        $fileName=$_FILES['image']['name'];
                        $fileTmp=$_FILES['image']['tmp_name'];
                        $allowedExt=['png','jpg','gif','jpeg'];
                        $split=explode('.',$fileName);
                        $ext=end($split);
                       if(in_array($ext,$allowedExt)){
                           move_uploaded_file($fileTmp,'images/'.$fileName);
                       }else{
                           echo "Sorry Images Only allowed";
                           header('Refresh: 3;URL=index.php');
                       }
                        ?>
                        <img src=<?="images/".$fileName?> alt="User profile" style="width:200px; height:200px; object-fit:cover">
                    </div>
                    <div style="width:100%;margin-left:20px">
                        <table class="table table-bordered">

                            <!-- add your own data -->
                <?php
                    $_POST=array_flip($_POST);
                    $check=array_key_exists("",$_POST);
                    if(!$check){
                        $_POST=array_flip($_POST);
                        foreach ($_POST as $key=>$value):?>
                            <tr>
                                <td class="text-capitalize" style="background:#bfbbbb;color:#403a3a"><?=$key?></td>
                                <td><?=$value?></td>
                            </tr>
                        <?php endforeach;
                    }else{
                        echo "Please Fill Form First";
                        header("Refresh: 5;URL= index.php");
                    }
                ?>            


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>