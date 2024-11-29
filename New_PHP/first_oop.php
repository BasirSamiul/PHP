<?php
    
    class User{
        public $name;
        public $email;

        
        public function user($name, $email){
            echo "Hey, {$name}!!! you are now {$email}";
        }

        public function login(){
            echo "Login";
        }

    }

    $my_user = new User();
    $my_user -> name = "Samiul Basir";
    $my_user -> email = "samuil@gmail.com";

    $my_user -> login();

    // var_dump($my_user);


?>