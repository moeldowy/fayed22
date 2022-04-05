<?php
//Do NOT Store Password in DATABASE as Plain TEXT ,so you must use password_hash first and store hashed password
/*$password='asd123';
$hashed=password_hash($password,PASSWORD_DEFAULT);
//echo $hashed;
if(password_verify('asd123',$hashed)){
    echo "Log in";
}else{
    echo "wrong";
}*/
$string1="moHAMMed SALaH KAmEL";
//echo ucwords($string);
/*echo ucfirst($string);
echo strtoupper($string);
echo strtolower($string);*/

//echo ucwords(strtolower($string));
/*$string2="                  Mohammed                  ";
echo $string2;
echo "<hr>";
$trimmed=trim($string2);
echo $trimmed;*/
/*$string3="\\slashes";
echo $string3;
echo "<hr>";
$stripped=stripslashes($string3);*/
/*echo $stripped;*/
/*$string4="<h3>Esraa</h3><script>alert('Hi');</script>";
//echo $string4;
$protect=strip_tags($string4);
echo $protect;*/
$string ="Welcome to my city and iam from Fayed which it is located in Ismalia";
$needle='luxor';//comes form user input
$search =strpos($string,$needle);
/*if(!$search){
    echo "Sorry $needle is not found";
}else{
    echo "We Found $needle in Position $search";
}*/

$names=["ali","mayar","omnia","omar"];
/*if(in_array("omar",$names)){
    echo "Yes we found what you want :)";
}else{
    echo "Sorry, Search again :(";
}
$x='saddasdasa';
if($x){
    echo $x;
}else{
    echo "no";
}*/
//echo $names;

/*$arraytostring=implode(':) ',$names);
echo $arraytostring;

$string="Mohammed Salah Kamel";
$stringtoarray=explode(' ',$string);
var_dump($stringtoarray);*/