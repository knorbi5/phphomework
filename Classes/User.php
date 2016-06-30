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

        public function showAvailablePage(){
            // Itt eldöntjük (a data infói alapján), hogy mit jelenítünk meg
            if($this->data->getCurrentStatus() == "1"){
                $this->view->showLoggedInLayout();
            }else{
                $showLoginCaptcha = false;

                if($this->data->getCurrentFailedLogins(1) > 3){
                    $showLoginCaptcha = true;
                }

                $this->view->showLoginLayout($showLoginCaptcha);
            }
        }

        public function showRegistrationPage(){
            $this->view->showRegistrationLayout();
        }
    }