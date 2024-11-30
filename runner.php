<?php 
    include 'circle.php';
   
    $circle = new Circle("Circle", 5);
    // var_dump($circle);
    echo "Shape name is: " . $circle->getName() . "<br/>" . "The {$circle->getName()} area is: " . number_format($circle->calculateArea(), 2) ."<br/>";

?>