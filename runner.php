<?php 
    include 'shape.php';
    include 'circle.php';
    include 'rectangle.php';
   
    $circle = new Circle("Circle", 5);
    // var_dump($circle);
    echo "Shape name is: " . $circle->getName() . "<br/>" . "The {$circle->getName()} area is: " . number_format($circle->calculateArea(), 2) ."<br/>";

    $rectangle = new Rectangle("Rectangle", 50, 60);
    // var_dump($circle);
    echo "Shape name is: " . $rectangle->getName() . "<br/>" . "The {$rectangle->getName()} area is: " . number_format($rectangle->calculateArea(), 2) ."<br/>";

?>