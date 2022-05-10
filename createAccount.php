<?php
    //Default parameters for mySQL database
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "contactlist";

    //Get data from creation page
    $accountName = $_GET['accountName'];
    $accountPhone = $_GET['accountPhone'];
    $accountAddress = $_GET['accountAddress'];

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    }

    $sql = "INSERT INTO contactlist (accountName, accountPhone, accountAddress) VALUES ('$accountName', '$accountPhone', '$accountAddress')";

    if ($connection->query($sql) === TRUE) {
        echo 
        
        echo "New record created successfully.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

$connection->close();
?>