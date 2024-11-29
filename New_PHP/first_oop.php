<?php
    
    class User{
        public $name;
        public $email;

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

    }

    $user = new User("Samiul Basir", "samuil@gmail.com");

    $user -> login();

    $user1 = new User("Balkana", "balkana@gmail.com");

    $user1 -> login();

    // var_dump($my_user);


?>