<?php 

    $connection = mysqli_connect("localhost", "root", "", "my_database");

    if($connection)
    {
        echo "Connected successfully";
    }
    else{
        die("Connection failed: ". mysqli_connect_error());
    }

?>