<?php
session_start();
echo "Welcome: ".$_POST['username'];

$_SESSION['username']=$_POST['username'];