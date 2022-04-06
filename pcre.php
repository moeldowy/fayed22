<?php
$email="ahmed@yahoo.com";
/*$emailPattern="/^[A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}\._-]+@([A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}]{1,2}|[A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}]((?<!(\.\.))[A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}.-])+[A-Za-z0-9\x{0430}-\x{044F}\x{0410}-\x{042F}])\.[A-Za-z\x{0430}-\x{044F}\x{0410}-\x{042F}]{2,}$/iu";
$match=preg_match($emailPattern,$email);*/
$match = filter_var($email,FILTER_VALIDATE_EMAIL);

if($match){
    echo$email;
}else{
    echo "Wrong";
}