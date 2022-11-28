<?php

    $dbname = "canvas_usabilidade";
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $pdo = new PDO("mysql:dbname=" . $dbname . ";host:" . $dbhost . "", "" . $dbuser . "", $dbpass);

    $email = $_REQUEST['email'];

    $pdo->query("INSERT INTO `newsletter`(email) VALUES ('$email')");

    header("Location: index.php");
?>