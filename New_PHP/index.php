<?php

$title = 'I love doing php code!';
if ('0'){
    print('I love zero');
}
else{
    print('I do not love zero');
    $prices = [
        'laptop' => 1000,
        'mouse' => 50,
        'keyboard' => 120
    ];
        print("<br />" . $prices['laptop'] . "<br />");
        print($prices['mouse'] . "<br />");
        print($prices['keyboard']);
}
require 'index.view.php';