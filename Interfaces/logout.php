<?php
include_once("../Classes/Data.php");

$data = new Data();
$logout = $data->logoutUser();
echo $logout;