<?php
    session_start();
    $_SESSION['name'] = "John";
    if (isset($_SESSION['name'])) {
        echo "Hello, ". $_SESSION['name']. "!<br>";
        echo "Your session ID is: ". session_id();
    }
    else{
        echo "Session not started. Please start a session.";
    }
?>