<?php
    
    class User{
        public $name;
        public $email;

        private $status = 'active';

        public function __construct($name, $email){
            echo "Hey, I am default constructor.<br/>";
            $this -> name = $name;
            $this -> email = $email;
        }
        
        public function user($name, $email){
            echo "Hey, {$name}!!! you are now {$email}";
        }

        public function login(){
            echo $this->name . " Login" . "<br />";
        }
        
        public function setStatus($status){
            $this -> status = $status;
        }
        public function getStatus(){
            echo $this -> status;
        }

    }

    $user = new User("Samiul Basir", "samuil@gmail.com");

    $user -> login();

    $user1 = new User("Balkana", "balkana@gmail.com");

    $user1 -> login();

    // $user1 -> getStatus();

    $user1 -> setStatus("Inactive");

    $user1 -> getStatus();

    // var_dump($my_user);


?>