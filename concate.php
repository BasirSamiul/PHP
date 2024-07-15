<?php 
    $my_Name = "Samiul Basir";

    // echo $my_Name;

    // echo 'Hello, {$my_Name}'

    // $he = "Bob";

    // $she = "Alice";


    // $text = <<<TEXT
    // $he said, "PHP is awesome". "Of course" $she agreed.
    // TEXT;

    // echo $text;

    $title = "Mysite";

    $header = <<<HEADER
    <header>
        <h1> $title </h1>
    </header>
    HEADER;

    echo $header;

    $email = 'webmaster@phptutorial.net';
    //unset($email);

    var_dump($email);

?>