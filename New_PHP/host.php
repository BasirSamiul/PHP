<?php
    putenv('DB_HOST=localhost');
    putenv('DB_USER=root');

    $host = getenv('DB_HOST');
    $user = getenv('DB_USER');
    echo "Host: $host\n";
    echo "User: $user\n";
    // print (getenv('HOME'));
?>