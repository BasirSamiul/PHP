<?php

    function add (int $x, int $y) : int { return $x + $y;}

    $results = call_user_func_array('add', [10,20]);

    echo $results; // Output: 30
    define('APP_NAME', 'My Awesome App');
    echo APP_NAME; // Output: My Awesome App

?>