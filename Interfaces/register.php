<?php
include_once("../Classes/Data.php");

$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];

// Átadott értékek újraellenőrzése
if(empty($email) || empty($password) || empty($name) || strlen($password) < 5 || strlen($password) > 40 || strlen($name) > 200){
    echo "false";
    exit();
}

$data = new Data();
$register = $data->registerUser($email, $password, $name);
echo $register;