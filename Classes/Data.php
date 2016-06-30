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
            $userName = "";

            $loginProcess = $this->dbConnection->prepare("SELECT Name FROM phphomework_users WHERE Email = ? AND Password = ?");
            $loginProcess->bind_param("ss", $email, $this->hashPassword($password));
            $loginProcess->execute();
            $loginProcess->store_result();
            $userFound = $loginProcess->num_rows;
            $loginProcess->bind_result($userName);

            if($userFound == 1){
                while($loginProcess->fetch()){
                    $_SESSION["homeworkuserloggedinstatus"] = 1;
                    $_SESSION["homeworkuseremail"] = $email;
                    $_SESSION["homeworkusername"] = $userName;
                }

                $loginProcess->close();

                return 1;
            }else{
                // Sikertelen belépés logolása
                $this->logFailedLogin(1);
            }

            $loginProcess->close();
            return false;
        }

        public function logoutUser(){
            session_unset();

            return 1;
        }

        public function registerUser($email, $password, $name){
            $registerProcess = $this->dbConnection->prepare("INSERT INTO phphomework_users (Email, Password, Name) VALUES (?, ?, ?)");
            $registerProcess->bind_param("sss", $email, $this->hashPassword($password), $name);
            $registerProcess->execute();
            $registerProcess->store_result();
            $registerSuccessful = $registerProcess->affected_rows;
            $registerProcess->close();

            if($registerSuccessful == 1){
                // Email a regisztrációról
                //$this->sendMail("Köszönjük a regisztrációt!", "Regisztráció", $email);

                return 1;
            }

            return false;
        }

        public function logFailedLogin($type){
            $current_ip = $this->getCurrentIP();

            $currentLoginFailureTime = date("Y-m-d H:i:s");
            $registerProcess = $this->dbConnection->prepare("INSERT INTO phphomework_login_fails (Type, Value, Time) VALUES (?, ?, ?)");
            $registerProcess->bind_param("sss", $type, $current_ip, $currentLoginFailureTime);
            $registerProcess->execute();
            $registerProcess->close();

            return 1;
        }

        public function getCurrentFailedLogins($type){
            $current_ip = $this->getCurrentIP();

            $lastHourFailures = date('Y-m-d H:i:s', time() - 3600);
            $failCounterProcess = $this->dbConnection->prepare("SELECT ID FROM phphomework_login_fails WHERE Type = ? AND Value = ? AND Time > ?");
            $failCounterProcess->bind_param("sss", $type, $current_ip, $lastHourFailures);
            $failCounterProcess->execute();
            $failCounterProcess->store_result();
            $fails = $failCounterProcess->num_rows;
            $failCounterProcess->close();

            return $fails;
        }

        private function sendMail($message, $subject, $email){
            if(empty($message) || empty($subject) || empty($email)){
                return false;
            }

            $msg = wordwrap($message, 70);
            mail($email, $subject, $msg);
        }

        private function hashPassword($password){
            return md5($password);
        }

        private function getCurrentIP(){
            return $_SERVER['REMOTE_ADDR'];
        }
    }