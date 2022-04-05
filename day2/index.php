<?php
/*echo"first";
echo sayHello();
echo"second";
function sayHello(){
    return "Hello";
}
echo"Third";*/

// Indexed Array

/*$names=["ahmed","ali","Eslam","ahlam","Esraa","Toka"];
echo $names[0]."<hr>";
$count=count($names);
for($index=0;$index<$count;$index++){
    echo $names[$index]."<br>";
}
echo "<hr>";
foreach ($names as  $name){
    echo $name ."<br>";
}
echo "<hr>";
//Associative Array
$family=[
    "father"=>"Ahmed",
    "mother"=>"Sarah",
    "son"=>"Ashraf"
        ];

//echo $family["son"];

foreach ($family as $member){
    echo $member."<br>";
}
echo "<hr>";
foreach ($family as $key=>$member){
    echo $key .": ".$member."<br>";
}
echo "<hr>";
//Multi Dimension Array
$family=[
    "father"=>"Ahmed",
    "mother"=>"Sarah",
    "sons"=>["Ashraf","Menna","Asmaa"]
];
foreach ($family as $member){
  if(is_array($member)){
      foreach ($member as $element){
          echo $element."<br>";
      }
  }else{
      echo $member."<br>";
  }
}*/
/*$numbers=[4,3,1,0,2];
$letters=["d","a","c","b","e"];
echo"<pre>";
var_dump($numbers);
sort($numbers);
rsort($numbers);
echo "<hr>";
var_dump($numbers);
echo "</pre>";*/
$family=[
    "son1"=>"shimaa",
    "son2"=>"eslam",
    "son4"=>"ahmed",
    "son3"=>"esraa"
];
//print_r(array_keys($family));
$letters=["d","a","c","b","e"];
print_r(array_flip($family));
krsort($family);
ksort($family);
asort($family);
arsort($family);
//var_dump($family);
//How to Make Indexed Array
$mobiles[]="Apple";
$mobiles[]="Samsung";

//How TO Make Associative Array
$names["son1"]="ahmed";
$names["son2"]="ali";
//Array Of Variables [Indexed]
$name1="kahled";
$name2="esraa";
$students=[$name1,$name2];
//Compact Variables To make [Ass]array
$name1="kahled";
$name2="esraa";
$newstudents=compact("name1","name2");

$brands=["Nike","Fossil","Zara"];
//array_push($brands,"D&G");
//array_unshift($brands,"D&G");
//array_pop($brands);
//array_shift($brands);
/*echo"<pre>";
var_dump($brands);*/

echo current($brands);
next($brands);
echo current($brands);
prev($brands);
next($brands);
next($brands);
echo current($brands);
reset($brands);
end($brands);
echo current($brands);