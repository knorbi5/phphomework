<?php
include_once("../Classes/Data.php");

$email = $_POST["email"];
$password = $_POST["password"];

$data = new Data();
$register = $data->registerUser($email, $password);
echo $register;