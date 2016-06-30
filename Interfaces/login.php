<?php
    include_once("../Classes/Data.php");
    $data = new Data();

    $email = $_POST["email"];
    $password = $_POST["password"];
    $captcha = empty($_POST["g-recaptcha-response"]) ? "" : $_POST["g-recaptcha-response"];

    // Captcha ellen?rzése, ha szükséges
    if($data->checkIfCaptchaIsNeccessary() == true){
        if(empty($captcha) || strlen($captcha) == 0){
            echo "captcha_error";
            exit();
        }
    }

    $login = $data->loginUser($email, $password);
    echo $login;