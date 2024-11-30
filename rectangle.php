<?php
    // include 'shape.php';

    class Rectangle extends Shape{
        private $width;
        private $height;

        public function __construct($name, $width, $height){
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }

        public function calculateArea(){
            return $this->width * $this->height;
        }

    }

?>