<?php
    include_once("../Classes/Data.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    $data = new Data();
    $login = $data->loginUser($email, $password);
    echo $login;