<?php
include_once("Data.php");
include_once("View.php");
/**
 * Created by PhpStorm.
 * User: knorbi
 * Date: 6/27/2016
 * Time: 7:28 PM
 */
class User{
    public $view;
    public $data;

    public function __construct(){
        $this->view = new View();
        $this->data = new Data();
    }

    public function showUserPage(){
        // Itt eld�ntj�k (a data inf�i alapj�n), hogy mit jelen�t�nk meg
        $this->view->showRegistrationLayout();
    }
}