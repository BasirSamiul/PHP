<?php

  include 'database.php';

  $stmt = $pdo -> prepare('SELECT * FROM employees');

  $stmt -> execute();

  $results = $stmt -> fetchAll();

  echo '</pre>';
  var_dump($results);
  echo '</pre>'; 

?>