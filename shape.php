<?php
    abstract class Shape{
        protected $name;

        abstract public function calculateArea();

        public function __construct($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

    }
?>