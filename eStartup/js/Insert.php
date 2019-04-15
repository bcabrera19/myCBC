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

    $Publisher = $_POST['Publisher'];
    $Title = $_POST['Title'];
    $Sub_Title = $_POST['Sub-Title'];
    $iDate = $_POST['iDate'];
    $iNumber = $_POST['iNumber'];
    $cPrice = $_POST['cPrice'];
    $Condition = $_POST['Condition'];
    //$Cover = $_POST['img'];

    
    $sql = "INSERT INTO `myCBC`(`id`, `Publisher`, `Title`, `Sub-Title`, `iNumber`, `iDate`, `cPrice`, `Condition`, `img`) 
            VALUES (NULL,'$Publisher','$Title','$Sub_Title','$iDate','$iNumber','$cPrice','$Condition','img')";

    if(!mysqli_select_db($conn,'lgarcia2013'))
    {
        echo 'DB Not Selected';
    }
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    header("refresh:2; url=http://lamp.cse.fau.edu/~bcabrera2015/applied/");
?>