<?php
    // include 'shape.php';
    class circle extends Shape{
        private $radius;
        public function __construct($name, $radius){
            parent::__construct($name);
            $this->radius = $radius;
        }
        public function calculateArea(){
            return pi() * pow($this->radius, 2);
        }
    }
    
?>