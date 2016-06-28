<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    class Data{
        private $dbConnection;

        public function __construct(){
            $this->dbConnection = new mysqli("localhost", "root", "", "phphomework");
        }

        public function getCurrentStatus(){
            $current_status = isset($_SESSION["homeworkuserloggedinstatus"]) ? $_SESSION["homeworkuserloggedinstatus"] : 0;

            return $current_status;
        }

        public function loginUser($email, $password){
            $loginProcess = $this->dbConnection->prepare("SELECT ID FROM phphomework_users WHERE Email = ? AND Password = ?");
            $loginProcess->bind_param("ss", $email, $password);
            $loginProcess->execute();
            $loginProcess->store_result();
            $userFound = $loginProcess->num_rows;
            $loginProcess->close();

            if($userFound == 1){
                $_SESSION["homeworkuserloggedinstatus"] = 1;
                $_SESSION["homeworkuseremail"] = $email;

                return 1;
            }

            return false;
        }

        public function logoutUser(){
            session_unset();

            return 1;
        }

        public function registerUser($email, $password){
            $registerProcess = $this->dbConnection->prepare("INSERT INTO phphomework_users (Email, Password) VALUES (?, ?)");
            $registerProcess->bind_param("ss", $email, $password);
            $registerProcess->execute();
            $registerProcess->close();

            // Email a regisztrációról
            //$this->sendMail("Köszönjük a regisztrációt!", "Regisztráció", $email);

            return 1;
        }

        private function sendMail($message, $subject, $email){
            if(empty($message) || empty($subject) || empty($email)){
                return false;
            }

            $msg = wordwrap($message, 70);
            mail($email, $subject, $msg);
        }
    }