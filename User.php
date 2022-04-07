<?php
class User{
    //Declare Properties (Variables and constants)
    public $id;
    public $image;
    public $email;
    public $username;
    public $password;
    public $gender;
    public $age;
    public $status;
    public const FAV_CLUB="AL-Ahly";
    /*
     * Members [None-Static Member - Static Member]
     * variables in properties are none
     * constant in properties are static
     * methods -> non static
     * static methods 
     * */
    //Declare Magic Methods (Predefined function (Just Name) but you can make your own implementation)
    public function __construct(){

    }
    //Declare Methods (Functions)
    public function deactivate(){
            $this->status=0;
            }
    public function showStatus(){
        if($this->status==1){
            return"activated";
        }else{
            return "deactivated";
        }
    }
    
    public static function sayHello(){
        return "Hello, ";
    }
}
/*$newUser= new User();
$newUser->id=1;
$newUser->email="ahmed@yahoo.com";

$newUser->deactivate();*/
//var_dump($newUser);
/*
  * Members [None-Static Member - Static Member]
  * variables in properties are none
  * constant in properties are static
  * methods -> non static
  * static methods 
  * */
/*echo $newUser->showStatus();
echo $newUser->status;

echo User::FAV_CLUB;
echo User::sayHello();*/
