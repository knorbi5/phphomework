<?php
    include_once("Data.php");
    include_once("View.php");

    class User{
        public $view;
        public $data;

        public function __construct(){
            $this->view = new View();
            $this->data = new Data();
        }

        // Felhasználó státusza alapján elérhető felület megjelenítése
        public function showAvailablePage(){
            // Belépett felhasználó
            if($this->data->getCurrentStatus() == "1"){
                $this->view->showLoggedInLayout();
            }else{
                $showLoginCaptcha = false;

                if($this->data->checkIfCaptchaIsNeccessary() == true){
                    $showLoginCaptcha = true;
                }

                $this->view->showLoginLayout($showLoginCaptcha);
            }
        }

        // Regisztrációs felület megjelenítése
        public function showRegistrationPage(){
            $this->view->showRegistrationLayout();
        }
    }