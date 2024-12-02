<?php
    $host = 'localhost';
    $port = 3306;
    $dbname ='mydata';
    $username = 'root';
    $password = 'admin#2024';

    $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

    try{
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected successfully';
    }catch(PDOException $e){
        echo 'Connection failed: '. $e->getMessage();
    }
?>