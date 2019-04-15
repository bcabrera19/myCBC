<?php

    session_start();
    
    $host = "localhost";
    $user = "lgarcia2013";
    $password = "UCT2m21h4q";
    $database = "lgarcia2013";
    
    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;        
    }
        
?>