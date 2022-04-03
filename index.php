<?php

/*
 * Echo Is faster Than Print
 * Echo can print more values but print can not do it
 */
/*echo "Mohammed1","Mohammed 2";
print"Ali1";
echo("Ashraf");
print("Medhat");
echo"<h1>Heading 1</h1>";*/
/*$name=array("ali","ahmed","mahmoud");
$names=["ali","ahmed","mahmoud"];
echo"My Name is $name";
//PHP is Loosely Typed Language
echo gettype($name);*/
/*
 * Data Types
 * 1- Scalar Data types
 * [String - Integer - float - Boolean]
 * 2- Compound Data Types
 * [Array - Object]
 * 3- Special Data types
 * [NULL - Resource]
 */
$age=(boolean)0;
/*echo gettype($age);*/
echo $age;
/*$name=true;
echo $name;
var_dump($name);*/
/*if($age){
    echo"True";
}else{
    echo "False";
}*/
$school=0;
/*if(isset($school)){
    echo "Yes school has value";
}else{
    echo "No school has not value";
}*/
/*if(empty($school)){
    echo "Yes school it is empty";
}else{
    echo "No school it is not empty";
}*/
/*$club="Ismaily";
echo $club;
$club="ahly";
echo $club;*/

/*define("FAV_CLUB","al ahly");
echo FAV_CLUB;
define("FAV_CLUB","alismaily");
echo FAV_CLUB;*/
const FAV_CLUB="alahly";
//echo FAV_CLUB;
$name=true;
/*if(is_bool($name)){
    echo "Yes it is bool";
}else{
    echo "No it is not bool";
}*/

function sayMyName(){
    echo "My name is Mohammed";
}
//sayMyName();
function calc($x,$y=5){
    
    return $x*$y;
}
//echo calc()*3;
/*echo gettype(calc());*/
//echo calc(5);

$age=25;// Global Scoop

function happyYear(){
    static $age=22;
    $age++;
    return "Happy Year your age is $age";
}
/*echo happyYear();
echo happyYear();
echo happyYear();
echo happyYear();*/
/*
 * Global Scoop
 * Local Scoop
 * Parameter Scoop
 * Static Scoop
 */

$toto="Ali";
//echo $toto;
//How to Make alias name for  variable (Reference)
$name=&$toto;
$toto="ahmed";
$toto="Ali";
unset($toto);
$toto="esraa";
if($name=='Ali'){
    echo " you are Welcome";
}else{
    echo "You are not welcome";
}