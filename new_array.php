<?php

    function my_array($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    my_array($arr);

?>